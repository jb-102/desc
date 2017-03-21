<?php

    include 'connection.php'; 

    if(isset($_POST['get']))
    {

        if ($_POST['get'] == "teacher_ids") {


            $sql = "SELECT teacher_id,teacher_name from teacher_profile WHERE type = 'normal'";

            $res = $conn->query($sql);

            $options = array();

            while ($row = $res -> fetch_assoc()) {

                $arr['label'] = $row['teacher_name'];
                $arr['value'] = $row['teacher_id'];
                array_push($options, $arr);

            }

            print(json_encode($options));

        }
        else if ($_POST['action'] == "edit") {
            # code...

            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $column = array_keys($data[$id]);

            $column = array_shift($column);

            $changedData = $data[$id][$column];


            if ($column == 'tile_on_left') {


                if ($changedData == 'yes') {


            
                    $replace_sql = "UPDATE tiles SET tile_on_left = 'no' WHERE tile_on_left = 'yes' ";

                    if ($conn->query($replace_sql) === TRUE) {

                        $sql = "UPDATE tiles SET tile_on_left = 'yes' WHERE tile_id=".$id;

                        if ($conn->query($sql) === TRUE) {

                            $query = "SELECT * from tiles";

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

                    } else {
                        echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                    }
                }
                else{

                     echo '{"fieldErrors":[{"name":"tile_on_left","status":"Please select correct option"}],"data":[]}';

                }

            }else{

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

            }
        }

    }


        $conn->close();

?>