<?php

    session_start();

    // include db connect class
    require_once __DIR__ . '/db_connect.php';                
    $db = new DB_CONNECT();
    $con = $db->connect();

    if(isset($_POST['upload_notes_button'])) { 
        
        #upload pdf
        $class_id = $_POST['notes_select_class'];
        $subject = $_POST['notes_select_subject'];

        $path = "pdfs/notes"; // Name of Directory on Server

        date_default_timezone_set('Asia/Kolkata');
        $pdf_name = preg_replace('/\s+/', '_', $_FILES['file']['name']);
        
        
        $allowed =  array('pdf');
        $ext = pathinfo($pdf_name, PATHINFO_EXTENSION);
        if(!in_array($ext , $allowed) ) {
            
            $_SESSION['notes_uploaded'] = "error";
            $_SESSION['error_code'] = "1";
            header("Location:./index.php");
            return;
        }
        
        if(!(file_exists($path."/".$pdf_name))){

            $pdf_tmp_name = $_FILES['file']['tmp_name'];
            $full_path = $path."/".$pdf_name;

            if(move_uploaded_file($pdf_tmp_name,$full_path)){ // Copies the file to Server Directory

                $query = "INSERT INTO notes(`name`, `path`, `subject`, `class_id`, `updated_on`) VALUES ('".$pdf_name."', '".$full_path."', '".$subject."', '".$class_id."', '".date("Y-m-d H:i:s")."')";

                $result = $con -> query($query);

                $_SESSION['notes_uploaded'] = "success";
                header("Location:./index.php");


            } else {

                $_SESSION['notes_uploaded'] = "error";
                $_SESSION['error_code'] = "1";
                header("Location:./index.php");
            }
        } else {
            $_SESSION['notes_uploaded'] = "error";
            $_SESSION['error_code'] = "2";
            header("Location:./index.php");
        }
        
    }  
    # get all notes
    elseif (isset ($_POST['getNotesSubject'])) {  

        $sql = "SELECT subject.subject_id, subject.name FROM  subject";

        $res = $con -> query($sql);

        $result = array();

        while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
        }
        //print(json_encode($result));
        print('{"data":'.json_encode($result).'}');   
    }
    #delete timetable
    elseif (isset($_POST['action'])){
        
        #Delete
        if($_POST['action'] == "delete"){

            $id = $_POST['id'];
    
            $path = "";
            
            $sql_query = "SELECT path FROM notes  WHERE note_id = '". $id ."' ";
            
            $res = $con -> query($sql_query);
            
            while ($row = $res -> fetch_assoc()) {
                # code...
                $path = $row['path'];
            }

            unlink($path);
            
            $sql = "DELETE FROM notes WHERE note_id = ".$id;

            $result = mysqli_query($con,$sql);

            if ($result === TRUE) {
                echo "success";
            }
            else
            {
                echo "Failed to Delete.";
            }
        }
        
    }
    # get subjects
    else {

        $query = "SELECT notes.note_id AS id, notes.name AS file_name, notes.path, notes.subject, class.name AS class, notes.updated_on FROM notes INNER JOIN class WHERE notes.class_id = class.class_id;";
        
        $res = $con -> query($query);

        $result = array();

        while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
        }
        //print(json_encode($result));
        print('{"data":'.json_encode($result).'}');

    }
    
    mysqli_close($con);