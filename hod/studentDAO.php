<?php
        // include db connect class
        require_once __DIR__ . '/db_connect.php';                
        $db = new DB_CONNECT();
        $con = $db->connect();
        
        
        if( isset($_POST['notify_user'])){
            echo 'notify';
        }
        elseif(isset($_POST['section_id'])) {

            $section_id = $_POST['section_id'];

            $sql = "SELECT student.student_id, student.adm_no,student.roll_no, student.name, class.name AS class, section.alphabetic_value AS section, student.fathers_name, student.mothers_name, student.email, student.phone, student.address, student.gender, student.dob FROM student INNER JOIN section on student.section_id = section.section_id INNER JOIN class ON section.class_id = class.class_id WHERE student.section_id=".$section_id;
            


            $res = $con -> query($sql);

            $result = array();

            while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;
            }
            //print(json_encode($result));
            print('{"data":'.json_encode($result).'}');
        
        }
        # get section options
        elseif (isset($_POST['class_name'])) { 

            $class_name = $_POST['class_name'];
            $class_id;
            
            $sql = "SELECT class.class_id FROM class WHERE class.name = '".$class_name."' ";
            
            $result_id = $con -> query($sql);

            while ($row = $result_id -> fetch_assoc()) {
                    # code...
                    $class_id = $row['class_id'];
            }
            
            
            $sql = "SELECT section_id AS id, alphabetic_value AS section_name FROM section WHERE class_id = '".$class_id."'";

            $res = $con -> query($sql);

            $result = array();

            while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;
            }
            //print(json_encode($result));
            print('{"data":'.json_encode($result).'}');
        }
        elseif (isset($_POST['action'])) {
            
            # Edit...
            if ($_POST['action'] == "edit") {
      
                update_student($_POST);

            } 
            if ($_POST['action'] == "send") 
            {
                notify_user($_POST);
            }
            
            #Create
            if($_POST['action'] == "add"){
                
                create_student($_POST);
            }
            
            #Delete
            if($_POST['action'] == "delete"){
                
                $id = $_POST['student_id'];
                
                $sql = "DELETE FROM student WHERE student_id = ".$id;

                $result = mysqli_query($con,$sql);
                
                if ($result === TRUE) {
                    echo "success";
                }
                else {
                    echo "Failed to Delete.";
                }
            }
        }
        else
        {
            $sql_query = "SELECT student.student_id, student.adm_no,student.roll_no, student.name, class.name AS class, section.alphabetic_value AS section, 
                        student.fathers_name, student.mothers_name, student.email, student.phone, student.address, student.gender, student.dob 
                        FROM student INNER JOIN section on student.section_id = section.section_id INNER JOIN class ON section.class_id = class.class_id";

            $res = $con -> query($sql_query);
            $result = array();

            while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
            }

            print('{"data":'.json_encode($result).'}');

        }
        
        
        #update student
        function update_student($data){
            
            global $con;

            //update all data
            $id =  $data["student_id"];
            $adm_no = $data["adm_no"];
            $roll_no =  $data["roll_no"];
            $name = $data["name"];
            $class = $data["class"];
            $section = $data["section"];
            $fathers_name = $data["fathers_name"];
            $mothers_name = $data["mothers_name"];
            $email = $data["email"];
            $phone = $data["phone"];
            $address = $data["address"];
            $gender = $data["gender"];
            $dob = $data["dob"];

            $section_id = get_section_id($class, $section);


            $sql = "UPDATE student SET name='".$name."', adm_no='".$adm_no."', roll_no='".$roll_no."', section_id='".$section_id."', fathers_name='".$fathers_name."', mothers_name='".$mothers_name."', "
                    . "email='".$email."', phone='".$phone."', address='".$address."', gender='".$gender."', dob='".$dob.
                    "' WHERE student_id=".$id;

            if ($con->query($sql) === TRUE) {

                echo "success";

            } else {
                echo 'Failed to updated.';
            }
        }
        
        #create student
        function create_student($data){

            global $con;

            $roll_no =  $data["roll_no"];
            $name = $data["name"];
            $adm_no = $data["adm_no"];
            $class = $data["class"];
            $section = $data["section"];
            $fathers_name = $data["fathers_name"];
            $mothers_name = $data["mothers_name"];
            $email = $data["email"];
            $phone = $data["phone"];
            $address = $data["address"];
            $gender = $data["gender"];
            $dob = $data["dob"];


            $section_id = get_section_id($class, $section);

            $sql = "INSERT INTO student(`name`, `adm_no`, `roll_no`,`section_id`, `fathers_name`, `mothers_name`, `email`, `phone`, `address`, `gender`, `dob`) "
                    . "VALUES ('".$name."','".$adm_no."','".$roll_no."','".$section_id."','".$fathers_name."','".$mothers_name."','".$email."','".$phone."','".$address."','".$gender."','".$dob."')";


            $result = mysqli_query($con,$sql);

            //get id that has been assigned to this record
            $id = mysqli_insert_id($con);

            if ($result === TRUE) {

                echo "success";

            } else {
                echo 'Failed to updated.';
            }
        }
        
        # send notification to student
        function notify_user($data){
            
            global $con;
            
            $student_id = $data["student_id"];
            $message =  $data["message"];
            
            date_default_timezone_set('Asia/Kolkata');
            
            $sql_query = "INSERT INTO fee_notification (`message`, `student_id`, `sent_on`) VALUES ('".$message."', '".$student_id."', '".date("Y-m-d H:i:s")."')";
            
            $result = mysqli_query($con,$sql_query);
            
            // get notification_id and use for fcm
            $notification_id = mysqli_insert_id($con);
            
            if ($result === TRUE) {

                echo "success";

            } else {
                echo 'Failed to updated.';
            }
            
            
        }

        function get_section_id($class, $section){

            global $con;

            $query_section = "SELECT section.section_id FROM section INNER JOIN class ON section.class_id = class.class_id WHERE class.name = '".$class."'  AND section.alphabetic_value='".$section."' ";
                
            $res_section = $con -> query($query_section);

            $result_section = array();

            while ($row = $res_section -> fetch_assoc()) {
                    # code...
                    $result_section[] = $row;
            }
            return $result_section[0]["section_id"];
        }
       
        
        mysqli_close($con);