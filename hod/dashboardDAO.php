<?php

    // include db connect class
    require_once __DIR__ . '/db_connect.php';                
    $db = new DB_CONNECT();
    $con = $db->connect();
    
    if(isset($_POST['table'])){
        
        $sql_query = "";
        $table = $_POST['table'];
        
        if($table === 'student'){
            $sql_query = "SELECT student.student_id, student.roll_no, student.name, class.name AS class, section.alphabetic_value AS section, 
                        student.fathers_name, student.mothers_name, student.email, student.phone, student.address, student.gender, student.dob 
                        FROM student INNER JOIN section on student.section_id = section.section_id INNER JOIN class ON section.class_id = class.class_id";
        } 
        elseif ($table === 'teacher'){
            $sql_query = "SELECT * FROM teacher";
        } elseif ($table === 'section'){
            $sql_query = "SELECT DISTINCT section.section_id AS section_id, class.name AS class_name, section.alphabetic_value AS section, section.section_password AS password, 
                            ( SELECT COUNT( student.section_id ) 
                                FROM student WHERE student.section_id = section.section_id
                            ) AS total_students
                            FROM section
                            INNER JOIN class ON section.class_id = class.class_id";
        }
        
        $res = $con -> query($sql_query);
        $result = array();

        while ($row = $res -> fetch_assoc()) {
            # code...
            $result[] = $row;
        }

        print('{"data":'.json_encode($result).'}');
        
        
    }
    # get total numbers students, sections, teacher
    else{
        $sql = " SELECT ( SELECT COUNT(student.student_id) FROM   student ) AS students,
                ( SELECT COUNT(teacher.teacher_id) FROM   teacher ) AS teachers, 
                ( SELECT COUNT(section.section_id) FROM   section ) AS sections FROM dual ";

        $res = $con -> query($sql);
        $result = array();

        while ($row = $res -> fetch_assoc()) {
            # code...
            $result[] = $row;
        }

        print('{"data":'.json_encode($result).'}');
    }
    
    mysqli_close($con);