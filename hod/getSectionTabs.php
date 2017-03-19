<?php
    
    // include db connect class
    require_once __DIR__ . '/db_connect.php';                
    $db = new DB_CONNECT();
    $con = $db->connect();

    if (isset($_POST['class_id'])) {

        $class_id = $_POST['class_id'];

        $sql = "SELECT section_id AS id, alphabetic_value AS section_name FROM section WHERE class_id = ".$class_id;

        $res = $con -> query($sql);

        $result = array();

        while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
        }
        //print(json_encode($result));
        print('{"data":'.json_encode($result).'}');
    
    } 
    elseif(isset($_POST['classes'])){
        
        $sql = "SELECT section.alphabetic_value AS label, section.section_id AS value FROM section WHERE class_id=1";

        $res = $con -> query($sql);

        $result = array();

        while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
        }
        //print(json_encode($result));
        print('{"data":{"sections":'.json_encode($result).'}}');
        
    } else {
        echo '{"error":"Fields missing","status":"0"}';
    }
