<?php

    include 'connection.php';
    include 'smart_resize_image.function.php';


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

            

            $sql = "UPDATE cards SET $column='".mysqli_real_escape_string($conn,$changedData)."' WHERE card_id=$id";

            if($column == 'card_category')
            {
                $old_category;

                $getCategory = $conn->query("SELECT card_category from cards WHERE card_id=$id");

                while ($row = $getCategory -> fetch_assoc()) {
                     # code...

                    $old_category = $row['card_category'];

                }


                if ($conn->query($sql) === TRUE) {

                    if (change_stock($old_category,$changedData)) {
                    //     # code...
                            $query = "SELECT * from cards WHERE card_id=$id";

                            $res = $conn -> query($query);


                            $result = array();


                            while ($row = $res -> fetch_assoc()) {
                                # code...
                                $result[] = $row;

                            }

                            print('{"data":'.json_encode($result).'}');
                    }


                } else {
                    echo '{"fieldErrors":[{"name":"'.$column.'","status":"failed to updated."}],"data":[]}';
                }
            }
            else if($column == 'on_home' && $changedData == 'yes')
            {
                $category;
                $count=0;

                $getCategory = $conn->query("SELECT card_category from cards WHERE card_id=$id");

                while ($row = $getCategory -> fetch_assoc()) {
                     # code...

                    $category = $row['card_category'];

                }


                $check = $conn->query("SELECT on_home from cards WHERE card_category='$category'");

                while ($row = $check -> fetch_assoc()) {
                     # code...
                    if ($row['on_home'] == 'yes')
                        $count++;

                }

                if($count < 8)
                {   
                    if ($conn->query($sql) === TRUE) {

                    $query = "SELECT * from cards WHERE card_id=$id";

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
                else
                {
                    echo '{"fieldErrors":[{"name":"'.$column.'","status":"already 8 selected for home."}],"data":[]}';
                }       
            }
            elseif ($column == 'is_latest') {

                $old_value;

                $update_old = "UPDATE cards SET is_latest='yes' WHERE card_id = ".$id; 

                $sql = "SELECT is_latest FROM cards WHERE card_id = ".$id;

                $res = $conn->query($sql);

                while ($row = $res -> fetch_assoc()) {
                   
                    $old_value = $row['is_latest'];

                }
                $update_new = "UPDATE cards SET is_latest='".$old_value."' WHERE card_id = ".$changedData;

                if (($conn->query($update_old) === TRUE) && ($conn->query($update_new) === TRUE)) {

                   $query = "SELECT * from cards WHERE card_id=$id OR card_id=$changedData";


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
            else
            {
                if ($conn->query($sql) === TRUE) {

                    $query = "SELECT * from cards WHERE card_id=$id";

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
        elseif ($_POST['action'] == "create")
        {

            $data = $_POST['data'][0];

            $card_name = $data['card_name'];

            $card_description = $data['card_description'];

            $card_price = $data['card_price'];

            $card_category = $data['card_category'];
            
            $card_image = $data['card_image'];

            $on_home = $data['on_home'];
            
            
            
            $sql = "INSERT into cards (card_name,card_description,card_price,card_category,card_image,on_home) VALUES ('$card_name','$card_description',$card_price,'$card_category','$card_image','$on_home')";

            if (empty($card_name) || empty($card_description) || empty($card_price) || empty($card_image)) 
            {
                # code...

                $errors = '{"fieldErrors":[';
            
                if (empty($card_name))
                    $errors = $errors . '{"name":"card_name","status":"Value is required."},'; 
                if (empty($card_description)) 
                    $errors = $errors . '{"name":"card_description","status":"Value is required."},';
                if (empty($card_price))
                    $errors = $errors . '{"name":"card_price","status":"Value is required."},';
                if (empty($card_image))                     
                    $errors = $errors . '{"name":"card_image","status":"Value is required."},';
                
                echo rtrim($errors, "," ).'],"data":[]}';
            }
            else
            {

                if ($conn->query($sql) === TRUE) {


                    if (stock($card_category)) {

                        $query = "SELECT * from cards WHERE card_name='$card_name'";

                    

                        $res = $conn -> query($query);

                        $result = array();


                        while ($row = $res -> fetch_assoc()) {
                            # code...
                            $result[] = $row;

                        }

                        print('{"data":'.json_encode($result).'}');
                    }
                    else{

                        echo "abcd";

                    }
                    
                }
                else
                {
                    echo "Error: " . $sql ." -------  ". $conn->error;
                }
            }
        }
        elseif ($_POST['action'] == "remove") 
        {
            # code...

            $data = $_POST['data'];

            $id = array_keys($data)[0];


            $sql = "DELETE from cards WHERE card_id='$id'";

            if ($conn->query($sql) === TRUE) {

                print('{"data":[]}');

            }
        }
        elseif ($_POST['action'] == "upload") 
        {
            # code...

            $target_dir = "../images/cards/";
        

            $column = $_POST['uploadField'];

            // saving and retrieving image path from database
            $target_path = basename($_FILES['upload']['name']); 
            $target_file = $target_dir . 'main/' . basename($_FILES['upload']['name']);
            $tile_file = $target_dir . 'tiles/' . basename($_FILES['upload']['name']);
            $thumb_file = $target_dir . 'thumbnails/' . basename($_FILES['upload']['name']);

            $imageFileType = pathinfo($target_path,PATHINFO_EXTENSION);
            $check = getimagesize($_FILES["upload"]["tmp_name"]);

            if (file_exists($target_file)) {
                echo '{"data":[],"files":{"files":{"'.$target_path.'":{"id":"'.$target_path.'","filename":"'.$target_path.'","filesize":"'.$_FILES['upload']['size'].'","web_path":"images\/'.$target_path.'","system_path":"'.$target_file.'"}}},"upload":{"id":"'.$target_path.'"}}';

            }
            else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
                
                echo '{"fieldErrors":[{"name":"'.$column.'","status":"Please upload an image (jpg or png only)."}],"data":[]}';
            }
            else if ($check[0] != 900 || $check[0] != 1024 ) {
                
                echo '{"fieldErrors":[{"name":"'.$column.'","status":"Please upload an image of dimentions 900*1024."}],"data":[]}';
            }
            else if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) 
            {
                echo '{"data":[],"files":{"files":{"'.$target_path.'":{"id":"'.$target_path.'","filename":"'.$target_path.'","filesize":"'.$_FILES['upload']['size'].'","web_path":"images\/'.$target_path.'","system_path":"'.$target_file.'"}}},"upload":{"id":"'.$target_path.'"}}';

                smart_resize_image($target_file , null, 250 , 300 , false , $thumb_file , false , false ,100 );

                smart_resize_image($target_file , null, 150 , 150 , false , $tile_file , false , false ,100 );

            }
            else
            {
                echo '{"fieldErrors":[{"name":"'.$column.'","status":"Sorry, there was an error uploading your file."}],"data":[]}';
            }
        }           
    }
    else{


            $query = "SELECT * from cards";

            $res = $conn -> query($query);


            $result = array();
            $options = array();
            $arr['label'] = "Chose your option";
            $arr['value'] = "-1";
            array_push($options, $arr);


            while ($row = $res -> fetch_assoc()) {

                $result[] = $row;
                if ($row['is_latest'] == 'yes') {

                    $arr['label'] = "swap with ".$row['card_name'];
                    $arr['value'] = $row['card_id'];
                    array_push($options, $arr);

                }
                
            }
            
            if (isset($_POST['getLatest'])) {
                
                print(json_encode($options));
            }
            else {
                
                print('{"data":'.json_encode($result).'}');
            }

        }

    function stock($card_category)
    {
        $res =  $GLOBALS['conn']  -> query("SELECT stock from category WHERE category_name = '$card_category'");
        $count = 0;
        while ($row = $res -> fetch_assoc()) {
                # code...
                $count = $row['stock'] + 1;
        }

        $chk = $GLOBALS['conn'] -> query("UPDATE category SET stock='$count' WHERE  category_name = '$card_category'");

        return $chk;
    }

    function change_stock($old_category,$new_category)
    {
        $old_stock =  $GLOBALS['conn']->query("SELECT stock from category WHERE category_name = '$old_category'");
        $new_stock =  $GLOBALS['conn']->query("SELECT stock from category WHERE category_name = '$new_category'");
        $count = 0; 
        $new_count = 0;

        while ($row = $old_stock -> fetch_assoc()) {
                # code...
                $old_count = $row['stock'] - 1;
        }

        while ($row = $new_stock -> fetch_assoc()) {
                # code...
                $new_count = $row['stock'] + 1;
        }

        $old = $GLOBALS['conn'] -> query("UPDATE category SET stock='$old_count' WHERE  category_name = '$old_category'");
        $new = $GLOBALS['conn'] -> query("UPDATE category SET stock='$new_count' WHERE  category_name = '$new_category'");

        return ($old && $new);
    }


            $conn->close();

?>