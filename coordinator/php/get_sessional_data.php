<?php

    include 'connection.php'; 

    if(isset($_POST['action']))
    {


        if ($_POST['action'] == "upload") 
        {
            # code...

            $target_dir = "../images/";
        

            $column = $_POST['uploadField'];
                    
            // saving and retrieving image path from database
            $target_path = basename($_FILES['upload']['name']); 
            $target_file = $target_dir . basename($_FILES['upload']['name']);

            $imageFileType = pathinfo($target_path,PATHINFO_EXTENSION);
            $check = getimagesize($_FILES["upload"]["tmp_name"]);

            if (file_exists($target_file)) {
                echo '{"data":[],"files":{"files":{"'.$target_path.'":{"id":"'.$target_path.'","filename":"'.$target_path.'","filesize":"'.$_FILES['upload']['size'].'","web_path":"images\/'.$target_path.'","system_path":"'.$target_file.'"}}},"upload":{"id":"'.$target_path.'"}}';
            }
            else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                
                echo '{"fieldErrors":[{"name":"'.$column.'","status":"Please upload an image (jpg or png only)."}],"data":[]}';
            }
            else if ($check[0] != 500 || $check[0] != 500 ) {
                
                echo '{"fieldErrors":[{"name":"'.$column.'","status":"Please upload an image of dimentions 500*500."}],"data":[]}';
            }
            else if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
            {
                echo '{"data":[],"files":{"files":{"'.$target_path.'":{"id":"'.$target_path.'","filename":"'.$target_path.'","filesize":"'.$_FILES['upload']['size'].'","web_path":"images\/'.$target_path.'","system_path":"'.$target_file.'"}}},"upload":{"id":"'.$target_path.'"}}';
            }
            else
            {
            echo '{"fieldErrors":[{"name":"image","status":"Sorry, there was an error uploading your file."}],"data":[]}';
            }
        }
        else if ($_POST['action'] == "edit") 
        {
            # code...

            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $column = array_keys($data[$id]);

            $column = array_shift($column);

            $changedData = $data[$id][$column];


           
                    $sql = "UPDATE sessional_awards SET ". $column."='".$changedData."' WHERE enroll=" . $id;

                    if ($conn->query($sql) === TRUE) 
                        {

                        $query = "SELECT * from sessional_awards WHERE enroll =".$id;

                        $res = $conn -> query($query);


                        $result = array();


                        while ($row = $res -> fetch_assoc()) 
                        {
                            
                        $result[] = $row;

                        }

                            print('{"data":'.json_encode($result).'}');
                        }
                         else 
                         {
                            echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                         }

                    
           
        }
        else if($_POST['action'] == "create")
        {

            $data = $_POST['data'][0];

            $enroll = $data['enroll'];

            $name = $data['name'];

            $semester = $data['semester'];

            $sessional = $data['sessional'];

            $marks_sub1 = $data['marks_sub1'];

            $marks_sub2 = $data['marks_sub2'];

            $marks_sub3 = $data['marks_sub3'];

            $marks_sub4 = $data['marks_sub4'];

            $marks_sub5 = $data['marks_sub5'];

            $marks_sub6 = $data['marks_sub6'];

            $total_marks = ($marks_sub1 + $marks_sub2 + $marks_sub3 + $marks_sub4 + $marks_sub5 + $marks_sub6);



            $sql = "INSERT INTO sessional_awards (,enroll, name, semester, sessional, marks_sub1, marks_sub2, marks_sub3, marks_sub4, marks_sub5, marks_sub6, total_marks) VALUES ('$enroll', '$name', '$semester', '$sessional', '$marks_sub1', '$marks_sub2', '$marks_sub3', '$marks_sub4', $marks_sub5, $marks_sub6, $total_marks )";


            if ($conn->query($sql) === TRUE) 
            {
                $query = "SELECT * from sessional_awards WHERE enroll = '$enroll' ";


                $res = $conn -> query($query);

                $result = array();


                while ($row = $res -> fetch_assoc()) 
                    {
                    # code...
                    $result[] = $row;

                    }

                print('{"data":'.json_encode($result).'}');
            }    
           
        }  
        else if ($_POST['action'] == "remove")
        {

            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $delete_sql = "DELETE FROM sessional_awards WHERE enroll = '$id'";

            if ($conn->query($delete_sql) === TRUE)
             {

                $query = "SELECT * from sessional_awards";

                $res = $conn -> query($query);


                $result = array();


                while ($row = $res -> fetch_assoc()) 
                {
                    # code...
                    $result[] = $row;

                }

                print('{"data":'.json_encode($result).'}');


            }
        }
          


    }
    else
    {

            $query = "SELECT * from sessional_awards";
            $res = $conn -> query($query);


            $result = array();


            while ($row = $res -> fetch_assoc()) 
            {
            
            $result[] = $row;

            }
    
        print('{"data":'.json_encode($result).'}');
    }

    
        $conn->close();

?>

