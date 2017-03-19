<?php
        // include db connect class
        require_once __DIR__ . '/db_connect.php';                
        $db = new DB_CONNECT();
        $con = $db->connect();
        
        if (isset($_POST['action'])) { 
            
            # code...
            if ($_POST['action'] == "edit") {
                # code...

                    $id = $_POST["teacher_id"];
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $address = $_POST["address"];
                    $gender = $_POST["gender"];

                    $sql = "UPDATE teacher SET name='".$name."', email='".$email."', phone='".$phone."', address='".$address."', gender='".$gender.
                            "' WHERE teacher_id=".$id;
                
                

//                $sql = "UPDATE teacher SET ".$column."='".$changedData."' WHERE teacher_id=".$id;

                if ($con->query($sql) === TRUE) {

                    echo 'success';

                } else {
                    echo 'Failed to update';
                }

            } 
            
            if($_POST['action'] == "add"){
                
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $address = $_POST["address"];
                    $gender = $_POST["gender"];
                
                
                $sql = "INSERT INTO teacher(`name`, `email`, `phone`, `address`, `gender`) "
                        . "VALUES ('".$name."','".$email."','".$phone."','".$address."','".$gender."')";
                
                
//                $sql = "INSERT INTO teacher(`name`, `email`, `phone`) "
//                        . "VALUES ('".$name."','".$email."','".$phone."','".$address."','".$gender."')";

                $result = mysqli_query($con,$sql);
                
                //get id that has been assigned to this record
                $id = mysqli_insert_id($con);
                
                if ($result === TRUE) {
                    
                    echo "success";

                } else {
                    echo 'Failed to Insert.';
                }
            }
            
            if($_POST['action'] == "delete"){
                
                $id = $_POST["teacher_id"];
                
                $sql = "DELETE FROM teacher WHERE teacher_id = ".$id;

                $result = mysqli_query($con,$sql);
                
                if ($result === TRUE) {
                    
                    echo "success";

                } else {
                    echo 'Failed to Delete.';
                }
            }
            
        } else {
        
            $sql = "SELECT * FROM teacher";
            $res = $con -> query($sql);

            $result = array();

            while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;
            }
            //print(json_encode($result));
            print('{"data":'.json_encode($result).'}');
        }
        
        mysqli_close($con);
       
?>        