<?php

    include 'connection.php';


    if (isset($_POST['action'])) {


        # code...
        if ($_POST['action'] == "edit") {
            # code...


            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $column = array_keys($data[$id]);

            $column = array_shift($column);

            $changedData = $data[$id][$column];


            $sql = "UPDATE category SET $column='$changedData' WHERE category_id=$id";


            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from category WHERE category_id=".$id;

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

            $category_name = $data['category_name'];

            $category_description = $data['category_description'];




            $sql = "INSERT into category (category_name,category_description) VALUES ('$category_name','$category_description')";

            if (empty($category_name) && empty($category_description)) {
                # code...
                echo '{"fieldErrors":[{"name":"category_name","status":"Value is required."}, 
                  {"name":"category_description","status":"Value is required."} ],"data":[]}';
            }
            else if (empty($category_name))
            {
                echo '{"fieldErrors":[{"name":"category_name","status":"Value is required."} ],"data":[]}';
            }
            else if (empty($category_description)) {
                
                echo '{"fieldErrors":[{"name":"category_description","status":"Value is required."} ],"data":[]}';

            }
            else{

            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from category WHERE category_name='$category_name'";

                // var_dump($query);

                $res = $conn -> query($query);

                // var_dump($res);
                $result = array();


                while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;

                }

                print('{"data":'.json_encode($result).'}');
            }        
        }

            
      }
        

    }else
    {


        $query = "SELECT * from category";

        $res = $conn -> query($query);


            $result = array();
            $options = array();


            while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
                $arr['label'] = $row['category_name'];
                $arr['value'] = $row['category_name'];
                array_push($options, $arr);

            }
            
            if (isset($_POST['getOptions'])) {
                
                print(json_encode($options));
            }
            else {
                
                print('{"data":'.json_encode($result).'}');
            }
            
            
    }

            $conn->close();

?>
