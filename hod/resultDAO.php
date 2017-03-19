<?php
     
    session_start();

    // include db connect class
    require_once __DIR__ . '/db_connect.php';                
    $db = new DB_CONNECT();
    $con = $db->connect();

    
//    # upload with ajax
//    if (isset($_POST['action'])) {
//        
//        if($_POST['action'] == "create"){
//            
//            $data = $_POST['data'];
//            $id = array_keys($data)[0];
//            
//            echo "we are here";
//        }
//        elseif ($_POST['action'] == "upload"){
//            
//            $data = $_FILES['data'];
//            
//            print_r($data);
//            
//            
//        }
     if(isset ($_POST['type'])) {
         
        $type = $_POST['type'];
        
        $query = "";
        if($type === 'datesheet'){
        
            $query = "SELECT datesheet.datesheet_id AS id, datesheet.name As name, datesheet.path AS action, class.name AS class, "
                . "datesheet.updated_on AS updated_on FROM  datesheet INNER JOIN class WHERE datesheet.class_id = class.class_id;";
        } else {
            $query = "SELECT result.result_id AS id, result.name As name, result.path AS action, class.name AS class, "
                . "result.updated_on AS updated_on FROM  result INNER JOIN class WHERE result.class_id = class.class_id;";
        }

        $res = $con -> query($query);


        $result = array();


        while ($row = $res -> fetch_assoc()) {
            # code...
            $result[] = $row;
        }

        print('{"data":'.json_encode($result).'}');
    
    }
    #delete table
    elseif (isset($_POST['action'])){
        
        #Delete
        if($_POST['action'] == "delete"){

            $id = $_POST['id'];
            
            $path = "";
            
            $sql_query = "SELECT path FROM result  WHERE result_id = '". $id ."' ";
            
            $res = $con -> query($sql_query);
            
            while ($row = $res -> fetch_assoc()) {
                # code...
                $path = $row['path'];
            }

            unlink($path);
            
            $sql = "DELETE FROM result WHERE result_id = ".$id;

            $result = mysqli_query($con,$sql);

            if ($result === TRUE) {
                echo "success";
            }
            else
            {
                echo "File Path does not exist.";
            }
        }
        
    }
    else
    {
        $query = "SELECT result.result_id AS id, result.name As name, result.path AS action, class.name AS class, "
                . "result.updated_on AS updated_on FROM  result INNER JOIN class WHERE result.class_id = class.class_id;";

        $res = $con -> query($query);


        $result = array();


        while ($row = $res -> fetch_assoc()) {
            # code...
            $result[] = $row;
        }

        print('{"data":'.json_encode($result).'}');

    }
    
    mysqli_close($con);