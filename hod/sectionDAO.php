<?php
        // include db connect class
        require_once __DIR__ . '/db_connect.php';                
        $db = new DB_CONNECT();
        $con = $db->connect();
        
        
        if (isset($_POST['action'])) { 
            
            if($_POST['action'] == "add")
            {
                
                $alphabetic_value = $_POST["section"];
                $class_id = $_POST["class_name"];
                $password = $_POST["password"];

                $res_sec = $con -> query("SELECT name FROM class WHERE class_id = $class_id");

                $class_name = $res_sec -> fetch_assoc();

                $class_name = $class_name['name']; 

                $section_name = strtolower($class_name)."_".strtolower($alphabetic_value);
                

                $result = $con -> query("SELECT * FROM section WHERE alphabetic_value = '".$alphabetic_value."' AND class_id = '".$class_id."'");
                
                $result_data = array();


                while ($row = $result -> fetch_assoc()) {
                        # code...
                        $result_data[] = $row;
                }
                
                if(count($result_data) > 0){

                    echo 'This section already exists.';

                } else {
                    $sql = "INSERT INTO section(`alphabetic_value`, `class_id`, `name`, `section_password`) VALUES ('".strtoupper($alphabetic_value)."','".$class_id."','".$section_name."','".$password."')";
                    
                    $result = mysqli_query($con,$sql);

                    if ($result === TRUE) {

                        echo 'success';

                    } else {
                        echo 'Error occured while inserting data.';
                    }
                    
                }
                
            } 

            #change password
            else if ($_POST['action'] == "edit") {
               
               $section_id = $_POST['section_id'];
               $password = $_POST['password'];

               $sql = "UPDATE section SET section_password = '$password' WHERE section_id = $section_id";

               $result = mysqli_query($con,$sql);

               if ($result === TRUE) {

                    echo 'success';

                } else {
                    echo 'Error occured while inserting data.';
                }


            }

            #Delete
            elseif($_POST['action'] == "delete"){
                
               $id = $_POST['section_id'];
                
                $sql_query = "SELECT COUNT( student.section_id ) AS count FROM student WHERE student.section_id = '".$id."'";
                
                $res = $con -> query($sql_query);
                $count = 1;

                while ($row = $res -> fetch_assoc()) {
                        $count = $row['count'];
                }
                
                if($count == 0){
                    $sql = "DELETE FROM section WHERE section_id = ".$id;

                    $result = mysqli_query($con,$sql);

                    if ($result === TRUE) {
                        echo "success";
                    }
                    else {
                        echo "Failed to Delete!";
                    }
                    
                    
                } else {
                    echo 'Cannot delete this section. Section contains students';
                }
            }
            
        } 
        else if(isset($_POST['id']))
        {
                
                $class_id = $_POST['id'];
                
                $sql = "SELECT DISTINCT section.section_id AS section_id, class.name AS class_name, section.alphabetic_value AS section, section.section_password AS password,
                        ( SELECT COUNT( student.section_id ) 
                            FROM student WHERE student.section_id = section.section_id
                        ) AS total_students
                        FROM section
                        INNER JOIN class ON section.class_id = class.class_id where section.class_id = ".$class_id;

                $res = $con -> query($sql);

                $result = array();

                while ($row = $res -> fetch_assoc()) {
                        # code...
                        $result[] = $row;
                }
                //print(json_encode($result));
                print('{"data":'.json_encode($result).'}');
        }
        else
        {

            $sql_query = "SELECT DISTINCT section.section_id AS section_id, class.name AS class_name, section.alphabetic_value AS section, section.section_password AS password, 
                        ( SELECT COUNT( student.section_id ) 
                            FROM student WHERE student.section_id = section.section_id
                        ) AS total_students
                        FROM section
                        INNER JOIN class ON section.class_id = class.class_id";

            $res = $con -> query($sql_query);
            $result = array();

            while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
            }

            print('{"data":'.json_encode($result).'}');

        }
?>        