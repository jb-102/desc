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


                    $sql = "UPDATE projects_profile SET ". $column."='".$changedData."' WHERE project_id=".$id;

                        if ($conn->query($sql) === TRUE) {

                            $query = "SELECT * from projects_profile WHERE project_id =".$id;

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

            $project_id = $data['project_id'];

            $project_name = $data['project_name'];

            $no_of_members = $data['no_of_members'];

            $project_members = $data['project_members'];

            $year = $data['year'];

           

           



            $sql = "INSERT INTO projects_profile ( project_id, project_name, no_of_members, project_members, year ) VALUES ('$project_id', '$project_name', '$no_of_members', '$project_members', '$year' )";


            if ($conn->query($sql) === TRUE) 
            {
                $query = "SELECT * from projects_profile WHERE project_id = '$project_id' ";


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

            $delete_sql = "DELETE FROM projects_profile WHERE project_id = '$id'";

            if ($conn->query($delete_sql) === TRUE)
             {

                $query = "SELECT * from projects_profile";

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

        $query = "SELECT * from projects_profile";
        $res = $conn -> query($query);


        $result = array();


        while ($row = $res -> fetch_assoc()) 
        {
            # code...
            $result[] = $row;

        }
    
        print('{"data":'.json_encode($result).'}');
    }

        $conn->close();

?>