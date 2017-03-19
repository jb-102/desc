<?php
    

    echo (get_section_id('Third', 'B'));
    
    
    
    
    function get_section_id($class, $section){
        
        $sql_section_id = "SELECT section.section_id FROM section INNER JOIN class ON section.class_id = class.class_id WHERE class.name = '".$class."'  AND section.alphabetic_value='".$section."' ";
        
        // include db connect class
        require_once __DIR__ . '/db_connect.php';                
        $db = new DB_CONNECT();
        $con = $db->connect();

        $res = $con -> query($sql_section_id);

        $result = array();

        while ($row = $res -> fetch_assoc()) {
                # code...
                $result[] = $row;
        }
        
        mysqli_close($con);
        
        return $result[0]["section_id"];
    }