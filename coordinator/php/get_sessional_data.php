<?php

    include 'connection.php'; 

    if(isset($_POST['action']))
    {


        if ($_POST['action'] == "upload") {
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
        else if ($_POST['action'] == "edit") {
            # code...

            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $column = array_keys($data[$id]);

            $column = array_shift($column);

            $changedData = $data[$id][$column];


            //if ($column == 'subject_name') {


                //if ($changedData == 'yes') {


            
                   // $replace_sql = "UPDATE tiles SET tile_on_left = 'no' WHERE tile_on_left = 'yes' ";

                    //if ($conn->query($replace_sql) === TRUE) {

                        $sql = "UPDATE sessional_awards SET ". $column."='".$changedData."' WHERE enroll=".$id;

                        if ($conn->query($sql) === TRUE) {

                            $query = "SELECT * from sessional_awards WHERE enroll =".$id;

                            $res = $conn -> query($query);


                            $result = array();


                            while ($row = $res -> fetch_assoc()) {
                                # code...
                                $result[] = $row;

                            }

                            print('{"data":'.json_encode($result).'}');
                        } else {
                            echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                            }

                    
                //}
                //else{

                  //   echo '{"fieldErrors":[{"name":"tile_on_left","status":"Please select correct option"}],"data":[]}';

                //}

            /*}else{

                $sql = "UPDATE tiles SET ".$column."='".mysqli_real_escape_string($conn,$changedData)."' WHERE tile_id=".$id;


                if ($conn->query($sql) === TRUE) {

                    $query = "SELECT * from tiles WHERE tile_id=".$id;

                    $res = $conn -> query($query);


                    $result = array();


                    while ($row = $res -> fetch_assoc()) {
                        # code...
                        $result[] = $row;

                    }

                    print('{"data":'.json_encode($result).'}');


                } else {
                    echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                }

            }*/
        }

    }else if($_POST['action'] == "create"){

         $data = $_POST['data'][0];

            $enroll = $data['enroll'];

            $name = $data['name'];

            $course = $data['course'];

            $semester = $data['semester'];

            $section = $data['section'];

            $marks_sub1 = $data['marks_sub1'];

            $marks_sub2 = $data['marks_sub2'];

            $marks_sub3 = $data['marks_sub3'];

            $marks_sub4 = $data['marks_sub4'];

            $marks_sub5 = $data['marks_sub5'];

            $marks_sub6 = $data['marks_sub6'];

            $total_marks = $data['total_marks'];



            $sql = "INSERT INTO sessional_awards (enroll, name, course, semester, section, address, email, reg_no, batch, reg_status) VALUES ('$enroll', '$name', '$course', '$semester', '$section', '$address', '$email', '$reg_no', '$batch', '$reg_status')";


            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from teacher_profile WHERE teacher_id = $teacher_id";


                $res = $conn -> query($query);

                $result = array();


                while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;

                }

                print('{"data":'.json_encode($result).'}');
            }    
            else
            {
                echo '{"fieldErrors":[{"name":"coordinating_course","status":"Please select different."},{"name":"coordinating_sec","status":"Please select different."},{"name":"coordinating_sem","status":"Please select different."}],"data":[]}';
            }    
        }
        else if ($_POST['action'] == "remove")
        {

            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $delete_sql = "UPDATE teacher_profile SET type = 'normal', coordinating_course = NULL,  coordinating_sem = NULL,  coordinating_sec = NULL WHERE teacher_id = $id";

            if ($conn->query($delete_sql) === TRUE) {

                $query = "SELECT * from teacher_profile";

                $res = $conn -> query($query);


                $result = array();


                while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;

                }

                print('{"data":'.json_encode($result).'}');


            }

        }
    else
    {

        $query = "SELECT * from sessional_awards";
        $res = $conn -> query($query);


        $result = array();


        while ($row = $res -> fetch_assoc()) {
            # code...
            $result[] = $row;

        }
    
        print('{"data":'.json_encode($result).'}');
    }

        $conn->close();

?>