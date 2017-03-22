<?php

    include 'connection.php'; 

    if(isset($_POST['action']))
    {


         if ($_POST['action'] == "edit")
        {
            # code...

            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $column = array_keys($data[$id]);

            $column = array_shift($column);

            $changedData = $data[$id][$column];


          
                        $sql = "UPDATE class_routine SET ". $column."='".$changedData."' WHERE subject_code=".$id;

                        if ($conn->query($sql) === TRUE) {

                            $query = "SELECT * from class_routine WHERE subject_code =".$id;

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
        else if($_POST['action'] == "create")
        {

            $data = $_POST['data'][0];

            $subject_code = $data['subject_code'];

            $subject_name = $data['subject_name'];

            $semester = $data['semester'];

            $course = $data['course'];

            $teacher = $data['teacher'];

            $total_classes = $data['total_classes'];

           



            $sql = "INSERT INTO class_routine ( subject_code, subject_name, semester, course, teacher, total_classes) VALUES ('$subject_code', '$subject_name', '$semester', '$course', '$teacher', '$total_classes' )";


            if ($conn->query($sql) === TRUE) 
            {
                $query = "SELECT * from class_routine WHERE subject_code = '$subject_code' ";


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

            $delete_sql = "DELETE FROM class_routine WHERE subject_code = '$id'";

            if ($conn->query($delete_sql) === TRUE)
             {

                $query = "SELECT * from class_routine";

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

        $query = "SELECT * from class_routine";
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