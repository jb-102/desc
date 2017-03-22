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


                        $sql = "UPDATE seminar_profile SET ". $column."='".$changedData."' WHERE enroll=".$id;

                        if ($conn->query($sql) === TRUE) {

                            $query = "SELECT * from seminar_profile WHERE enroll =".$id;

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

                    
               
        }else if($_POST['action'] == "create")
        {

            $data = $_POST['data'][0];

            $enroll = $data['enroll'];

            $topic_name = $data['topic_name'];

            $year = $data['year'];

           

            $sql = "INSERT INTO seminar_profile ( enroll, topic_name, year) VALUES ('$enroll', '$topic_name', '$year' )";


            if ($conn->query($sql) === TRUE) 
            {
                $query = "SELECT * from seminar_profile WHERE enroll = '$enroll' ";


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

            $delete_sql = "DELETE FROM seminar_profile WHERE enroll = '$id'";

            if ($conn->query($delete_sql) === TRUE)
             {

                $query = "SELECT * from seminar_profile";

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

        $query = "SELECT * from seminar_profile";
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