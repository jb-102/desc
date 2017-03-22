<?php

    include 'connection.php'; 

    if(isset($_POST['action']))
    {


        if ($_POST['action'] == "edit") {
            # code...


            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $column = array_keys($data[$id]);

            $column = array_shift($column);

            $changedData = $data[$id][$column];


            $sql = "UPDATE student_profile SET $column='$changedData' WHERE enroll=$id";


            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from student_profile WHERE enroll=".$id;

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

            $enroll = $data['enroll'];

            $name = $data['name'];

            $course = $data['course'];

            $semester = $data['semester'];

            $section = $data['section'];

            $address = $data['address'];

            $email = $data['email'];

            $reg_no  = $data['reg_no'];

            $batch = $data['batch'];

            $reg_status = $data['reg_status'];


            $sql = "INSERT INTO student_profile (enroll, name, course, semester, section, address, email, reg_no, batch, reg_status) VALUES ('$enroll', '$name', '$course', '$semester', '$section', '$address', '$email', '$reg_no', '$batch', '$reg_status')";


            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from student_profile enroll = '$enroll'";

                $res = $conn -> query($query);

                $result = array();


                while ($row = $res -> fetch_assoc()) {
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

            $delete_sql = "DELETE FROM student_profile WHERE enroll = $id";

            if ($conn->query($delete_sql) === TRUE) {

                $query = "SELECT * from student_profile";

                $res = $conn -> query($query);


                $result = array();


                while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;

                }

                print('{"data":'.json_encode($result).'}');


            }
        }

    }
    else
    {

        $query = "SELECT * from student_profile";
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