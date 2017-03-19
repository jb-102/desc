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
            
            $data = $_POST;
            
            $id = array_keys($data)[0];
            
            sendMessage($_POST);
        }
    }
    # get subjects
    else {
        
        $sql = "SELECT subject.subject_id, subject.name FROM  subject";

        $res = $con -> query($sql);
        
        $html = '<option value="-1">Select Subject</option>';
        
        if(($res -> num_rows) > 0){
            while ($row = $res -> fetch_assoc()) {
                    # code...
                    $html = $html.' <option value="'.$row['name'].'">'.$row['name'].'</option> ';
            }
            echo $html;
        } else {
            echo '<option value="-1">No Subjects</option>';
        }
        
    }
    
    
    function sendMessage($data){
        global $con;
            
        $id = $data['student_id'];    
        $subject = $data["subject"];
        $message =  $data["message"];

        date_default_timezone_set('Asia/Kolkata');

        $sql_query = "INSERT INTO feedback (`message`, `student_id`, `subject`, `sent_on`) VALUES ('".$message."', '".$id."', '".$subject."',  '".date("Y-m-d H:i:s")."')";

        $result = mysqli_query($con,$sql_query);

        // get feedback_id and use for fcm
        $feedback_id = mysqli_insert_id($con);

        if ($result === TRUE) {
            
            echo "success";

        } else {
            echo 'Failed to send feedback message.';
        }
    }
    
    
    function sendMessageMultiple($data){
        global $con;
        
        $sql = "";
        
        foreach($data as $data['student_id']=>$value)
        {
            $sql .= "INSERT INTO feedback (`message`, `student_id`, `subject`, `sent_on`) VALUES ('".$data[$id]["message"]."', '".$id."', '".$data[$id]["subject"]."',  '".date("Y-m-d H:i:s")."');";
        }
        
        
            $result = mysqli_multi_query($con,$sql);
    
       // get feedback_id and use for fcm

        

        if ($result === TRUE) {
            
            echo "success";

        } else {
            echo 'Failed to send feedback message.';
        }
        
        
    }
    
    
    mysqli_close($con);