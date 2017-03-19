<?php
    session_start();
    
    // include db connect class
    require_once __DIR__ . '/db_connect.php';                
    $db = new DB_CONNECT();
    $con = $db->connect();
        
    if(isset($_POST['upload_worksheet_pdf'])) { 
        
        #upload pdf
        $class_id = $_POST['select_class'];

        date_default_timezone_set('Asia/Kolkata');
        
        $path = "pdfs/worksheets"; // Name of Directory on Server
        $pdf_name = preg_replace('/\s+/', '_', $_FILES['file']['name']);
        
        $allowed =  array('pdf');
        $ext = pathinfo($pdf_name, PATHINFO_EXTENSION);
        if(!in_array($ext , $allowed) ) {
            
            $_SESSION['worksheet_uploaded'] = "error";
            $_SESSION['error_code'] = "1";
            header("Location:./index.php");
            return;
        }
        
        if(!(file_exists($path."/".$pdf_name))){
            
        
            $pdf_tmp_name = $_FILES['file']['tmp_name'];
            $full_path = $path."/".$pdf_name;

            if(move_uploaded_file($pdf_tmp_name,$full_path)){ // Copies the file to Server Directory

                $query = "INSERT INTO worksheets(`name`, `path`, `class_id`, `updated_on`) VALUES ('".$pdf_name."', '".$full_path."', '".$class_id."', '".date("Y-m-d H:i:s")."')";

                $result = $con -> query($query);

                $_SESSION['worksheet_uploaded'] = "success";
                header("Location:./index.php");


            } else {
                $_SESSION['worksheet_uploaded'] = "error";
                $_SESSION['error_code'] = "1";
                header("Location:./index.php");
            }
        } else {
            $_SESSION['worksheet_uploaded'] = "error";
            $_SESSION['error_code'] = "2";
            header("Location:./index.php");
        }    

    } 
    #delete worksheet
    elseif (isset($_POST['action'])){
        
        #Delete
        if($_POST['action'] == "delete"){

            $id = $_POST['id'];
            
            $path = "";
            
            $sql_query = "SELECT path FROM worksheets  WHERE worksheet_id = '". $id ."' ";
            
            $res = $con -> query($sql_query);
            
            while ($row = $res -> fetch_assoc()) {
                # code...
                $path = $row['path'];
            }

            unlink($path);
            
            $sql = "DELETE FROM worksheets WHERE worksheet_id = ".$id;

            $result = mysqli_query($con,$sql);

            if ($result === TRUE) {
                echo "success";
            }
            else
            {
                echo "File Path does not exist.";
            }
        }
        
    }
    else {
        
        #view all uploaded pdf files
        
        $sql_query = "SELECT worksheets.worksheet_id AS id, worksheets.name AS name, class.name AS class, worksheets.updated_on AS updated_at, worksheets.path AS action "
                . "FROM worksheets INNER JOIN class ON worksheets.class_id = class.class_id";
        
        $res = $con -> query($sql_query);

        $result = array();

        while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
        }
        //print(json_encode($result));
        print('{"data":'.json_encode($result).'}');        
    }
    
    mysqli_close($con);