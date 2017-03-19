<?php
    
    // include db connect class
    require_once __DIR__ . '/db_connect.php';                
    $db = new DB_CONNECT();
    $con = $db->connect();
        
    # get section options
    if (isset($_POST['class_id'])) { 
        
        $class_id = $_POST['class_id'];
        
        $sql = "SELECT section_id AS id, alphabetic_value AS section_name FROM section WHERE class_id = '".$class_id."'";

        $result = $con -> query($sql);
        
        $html = '<option value="">Select Section</option>';
        
        if(($result -> num_rows) > 0){
            while ($row = $result -> fetch_assoc()) {
                    # code...
                    $html = $html.' <option value="'.$row['id'].'">'.$row['section_name'].'</option> ';
            }
            echo $html;
        } else {
            echo '<option value="">No sections in this class</option>';
        }
        
    } 
    # get students
    elseif (isset($_POST['section_id'])) { 
        
        $section_id = $_POST['section_id'];
        
        $sql = "SELECT student.student_id, student.roll_no, student.name, student.fathers_name, student.address FROM  student WHERE section_id = '".$section_id."'";

        $res = $con -> query($sql);

        $result = array();
        
        while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
        }
        //print(json_encode($result));
        print('{"data":'.json_encode($result).'}');
        
    }
    # send message
    elseif (isset($_POST['action'])) {
        
        if($_POST['action'] == "send"){
            
            sendMessage($_POST);
        }
    }
    
    function sendMessage($data){
        global $con;
            
        $id = $data['student_id'];    
        $subject = $data["subject"];
        $message =  $data["message"];


        date_default_timezone_set('Asia/Kolkata');

        $sql_query = "INSERT INTO academia (`subject`, `message`, `student_id`, `sent_on`) VALUES ('".$subject."', '".$message."', '".$id."', '".date("Y-m-d H:i:s")."')";

        $result = mysqli_query($con,$sql_query);

        // get message_id and use for fcm
        $message_id = mysqli_insert_id($con);

        if ($result === TRUE) {
            
            echo "success";

        } else {
            echo 'Failed to send feedback message.';
        }
    }
    
    
    mysqli_close($con);