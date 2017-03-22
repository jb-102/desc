<?php

    include 'connection.php';


    if (isset($_POST['action'])) {


        if ($_POST['action'] == "edit") {
            # code...


            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $column = array_keys($data[$id]);

            $column = array_shift($column);

            $changedData = $data[$id][$column];


            $sql = "UPDATE teacher_profile SET $column='$changedData' WHERE teacher_id=$id";


            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from teacher_profile WHERE teacher_id=".$id;

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
        }
        else if ($_POST['action'] == "create")
        {


            $data = $_POST['data'][0];

            $teacher_id = $data['teacher_id'];

            $coordinating_course = $data['coordinating_course'];

            $coordinating_sem = $data['coordinating_sem'];

            $coordinating_sec = $data['coordinating_sec'];




            $sql = "UPDATE teacher_profile SET type = 'coordinator', coordinating_course = '$coordinating_course', coordinating_sem = '$coordinating_sem', coordinating_sec = '$coordinating_sec' WHERE teacher_id = $teacher_id";


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
        

    }else
    {

        $query = "SELECT teacher_id,teacher_name,coordinating_course,coordinating_sec,coordinating_sem from teacher_profile WHERE type = 'coordinator'";

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
