<?php
 
/**
 * A class file to connect to database
 */
class DB_CONNECT {

    function connect() {
        // import database connection variables
        require_once __DIR__ . '/db_config.php';
 
        // Connecting to mysql database
        //$con = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD) or die("cannot connect:".mysql_error());
 
        // Selecing database
        //$db = mysql_select_db(DB_DATABASE) or die("error occurred while selecting database:".mysql_error()) or die(mysql_error());
 
        $con = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        } 
        // returing connection cursor
        return $con;
    }
 
    /**
     * Function to close db connection
     */
    function close($con) {
        // closing db connection
        $con->close();
    }
 
}
 
?>