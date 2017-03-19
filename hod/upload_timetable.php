<?php
    session_start();

    // include db connect class
    require_once __DIR__ . '/db_connect.php';                
    $db = new DB_CONNECT();
    $con = $db->connect();
    
    # get section options
    if (isset($_POST['class_id'])) { 
        
        $class_id = $_POST['class_id'];
        
        $sql = "SELECT section_id AS id, alphabetic_value AS section_name FROM section WHERE class_id = '".$class_id."'";

        $result = $con -> query($sql);
        
        $html = '<option value="">Select Section</option>';
        
        if(($result -> num_rows) > 0){
            while ($row = $result -> fetch_assoc()) {
                    # code...
                    $html = $html.' <option value="'.$row['id'].'">'.$row['section_name'].'</option> ';
            }
            echo $html;
        } else {
            echo '<option value="">No sections in this class</option>';
        } 
    } 

    elseif(isset($_POST['upload_timetable'])) { 
        
        #upload pdf
        
        $class_id = $_POST['select_class'];
        $section_id = $_POST['select_section'];
        
        $sql_query = "SELECT class.name AS class, section.alphabetic_value AS section FROM section INNER JOIN class ON section.class_id = class.class_id "
                . "WHERE section.section_id = '".$section_id."'  AND class.class_id = '".$class_id."'";
        
        $class_name;
        $section_name;
        
        $result = $con -> query($sql_query);
        
        if(($result -> num_rows) > 0){
            
            while ($row = $result -> fetch_assoc()) {
                $class_name = $row['class'];
                $section_name = $row['section'];
            }

            $path = "pdfs/timetable"; // Name of Directory on Server
            
            date_default_timezone_set('Asia/Kolkata');
            $pdf_name = $class_name.'-'.$section_name.'_'.date("Y-m-d").'.pdf';
            
            $allowed =  array('pdf');
            $ext = pathinfo($pdf_name, PATHINFO_EXTENSION);
            if(!in_array($ext , $allowed) ) {
                $_SESSION['timetable_uploaded'] = "error";
                $_SESSION['error_code'] = "1";
                header("Location:./index.php");
                return;
            }
            
            if(!(file_exists($path."/".$pdf_name))){
            
                $pdf_tmp_name = $_FILES['file']['tmp_name'];
                $full_path = $path."/".$pdf_name;

                if(move_uploaded_file($pdf_tmp_name , $full_path)){ // Copies the file to Server Directory

                    $name = $class_name.'-'.$section_name.'_'.date("Y-m-d");
                    $query = "INSERT INTO timetable(`name`, `path`, `class_id`, `section_id`, `updated_on`) VALUES ('".$name."', '".$full_path."', '".$class_id."', '".$section_id."', '".date("Y-m-d H:i:s")."')";

                    $result = $con -> query($query);

                    $_SESSION['timetable_uploaded'] = "success";
                    header("Location:./index.php");
                } else {

                    $_SESSION['timetable_uploaded'] = "error";
                    $_SESSION['error_code'] = "1";
                    header("Location:./index.php");
                }
            
            } else{
                $_SESSION['timetable_uploaded'] = "error";
                $_SESSION['error_code'] = "2";
                header("Location:./index.php");
            }

        } else {
            echo 'No data matched with this info..';
        }
    }
    #delete timetable
    elseif (isset($_POST['action'])){
        
        #Delete
        if($_POST['action'] == "delete"){

            $id = $_POST['id'];
            
            $path = "";
            
            $sql_query = "SELECT path FROM timetable  WHERE timetable_id = '". $id ."' ";
            
            $res = $con -> query($sql_query);
            
            while ($row = $res -> fetch_assoc()) {
                # code...
                $path = $row['path'];
            }

            unlink($path);
            
            $sql = "DELETE FROM timetable WHERE timetable_id = ".$id;

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
        
        $sql_query = "SELECT timetable.timetable_id AS id, class.name AS class, section.alphabetic_value AS section, "
                . "timetable.updated_on AS updated_at, timetable.path AS action FROM timetable "
                . "INNER JOIN class ON timetable.class_id = class.class_id INNER JOIN section ON timetable.section_id = section.section_id";
        
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