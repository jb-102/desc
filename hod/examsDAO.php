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
        $pdf_tmp_name = $_FILES['file']['tmp_name'];
        $prod_pdf_path = $path."/".$pdf_name;

        if(move_uploaded_file($pdf_tmp_name,$prod_pdf_path)){ // Copies the file to Server Directory

            $full_path = 'http://localhost:4040/Projects/SchoolManagement/app/'.$prod_pdf_path;
            
            
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
            header("Location:./index.php");
        }
            
    }
//    # upload with ajax
//    if (isset($_POST['action'])) {
//        
//        if($_POST['action'] == "create"){
//            
//            $data = $_POST['data'];
//            $id = array_keys($data)[0];
//            
//            echo "we are here";
//        }
//        elseif ($_POST['action'] == "upload"){
//            
//            $data = $_FILES['data'];
//            
//            print_r($data);
//            
//            
//        }
     elseif(isset ($_POST['type'])) {
         
        $type = $_POST['type'];
        
        $query = "";
        if($type === 'datesheet'){
        
            $query = "SELECT datesheet.datesheet_id AS id, datesheet.name As name, datesheet.path AS action, class.name AS class, "
                . "datesheet.updated_on AS updated_on FROM  datesheet INNER JOIN class WHERE datesheet.class_id = class.class_id;";
        } else {
            $query = "SELECT result.result_id AS id, result.name As name, result.path AS action, class.name AS class, "
                . "result.updated_on AS updated_on FROM  result INNER JOIN class WHERE result.class_id = class.class_id;";
        }

        $res = $con -> query($query);


        $result = array();


        while ($row = $res -> fetch_assoc()) {
            # code...
            $result[] = $row;
        }

        print('{"data":'.json_encode($result).'}');
    
    }
    
    mysqli_close($con);