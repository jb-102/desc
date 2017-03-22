<?php

    include 'connection.php'; 


        $query = "SELECT * from student_grevence";
        $res = $conn -> query($query);


        $result = array();


        while ($row = $res -> fetch_assoc()) {
            # code...
            $result[] = $row;

        }
    
        print('{"data":'.json_encode($result).'}');

        $conn->close();

?>