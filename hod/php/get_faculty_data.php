<?php

   include 'connection.php';


    if (isset($_POST['action'])) {


        if ($_POST['action'] == "edit") {
            # code...


            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $column = array_keys($data[$id]);

            $column = array_shift($column);

            $changedData = $data[$id][$column];


            $sql = "UPDATE teacher_profile SET $column='$changedData' WHERE teacher_id=$id";


            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from teacher_profile WHERE teacher_id=".$id;

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
        else if ($_POST['action'] == "create")
        {


            $data = $_POST['data'][0];

            $teacher_name = $data['teacher_name'];

            $address = $data['address'];

            $contact_no = $data['contact_no'];

            $email = $data['email'];

            $qualification = $data['qualification'];

            $designation = $data['designation'];

            $date_of_joining  = $data['date_of_joining'];



            $sql = "INSERT INTO teacher_profile (teacher_name, address, type, contact_no, email, qualification, designation, date_of_joining) VALUES ('$teacher_name', '$address', 'normal', '$contact_no', '$email', '$qualification', '$designation', '$date_of_joining')";


            if ($conn->query($sql) === TRUE) {

                $query = "SELECT * from teacher_profile WHERE contact_no = '$contact_no'";


                $res = $conn -> query($query);

                $result = array();


                while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;

                }

                print('{"data":'.json_encode($result).'}');
            }       
        }
        else if ($_POST['action'] == "remove")
        {

            $data = $_POST['data'];

            $id = array_keys($data);
    
            $id = array_shift($id);

            $delete_sql = "DELETE FROM teacher_profile WHERE teacher_id = $id";

            if ($conn->query($delete_sql) === TRUE) {

                $query = "SELECT * from teacher_profile";

                $res = $conn -> query($query);


                $result = array();


                while ($row = $res -> fetch_assoc()) {
                    # code...
                    $result[] = $row;

                }

                print('{"data":'.json_encode($result).'}');


            }
        }
        
    }
    else{
        
      $query = "SELECT * from teacher_profile ";

      $res = $conn -> query($query);


      		$result = array();


    		while ($row = $res -> fetch_assoc()) {
    			# code...
    			$result[] = $row;

    		}
        
    		print('{"data":'.json_encode($result).'}');
    		
    	}

        $conn->close();

?>
