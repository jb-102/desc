<?php
     
    session_start();

    // include db connect class
    require_once __DIR__ . '/db_connect.php';                
    $db = new DB_CONNECT();
    $con = $db->connect();
    
    #upload pdf
    if(isset($_POST['upload_exams_button'])) { 
        
        
        $class_id = $_POST['select_class'];
        $type = $_POST['select_type'];
        
        date_default_timezone_set('Asia/Kolkata');
        
        $path = ""; // Name of Directory on Server
        $query = "";
        if($type === 'datesheet'){
            $path = "pdfs/exams/datesheet";
        } elseif ($type === 'result'){
            $path = "pdfs/exams/result";
        }
        
        $pdf_name = preg_replace('/\s+/', '_', $_FILES['file']['name']);
        
        $allowed =  array('pdf');
        $ext = pathinfo($pdf_name, PATHINFO_EXTENSION);
        if(!in_array($ext , $allowed) ) {
            
            $_SESSION['exam_data_uploaded'] = "error";
            $_SESSION['error_code'] = "1";
            header("Location:./index.php");
            return;
        }
        
        if(!(file_exists($path."/".$pdf_name))){
            
        
            $pdf_tmp_name = $_FILES['file']['tmp_name'];
            $full_path = $path."/".$pdf_name;

            if(move_uploaded_file($pdf_tmp_name,$full_path)){ // Copies the file to Server Directory

                if($type === 'datesheet'){
                    $query = "INSERT INTO datesheet(`name`, `path`, `class_id`, `updated_on`) VALUES ('".$pdf_name."', '".$full_path."', '".$class_id."', '".date("Y-m-d")."')";
                } else { 
                    $query = "INSERT INTO result(`name`, `path`, `class_id`, `updated_on`) VALUES ('".$pdf_name."', '".$full_path."', '".$class_id."', '".date("Y-m-d")."')";
                }

                $result = $con -> query($query);

                $_SESSION['exam_data_uploaded'] = "success";
                header("Location:./index.php");


            } else {
                $_SESSION['exam_data_uploaded'] = "error";
                $_SESSION['error_code'] = "1";
                header("Location:./index.php");
            }
        } else {
            $_SESSION['exam_data_uploaded'] = "error";
            $_SESSION['error_code'] = "2";
            header("Location:./index.php");
        }    
            
    }
    
    mysqli_close($con);