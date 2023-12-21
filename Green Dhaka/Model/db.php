<?php 
    $host = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "greendhaka";

    function getConnection(){
        global $host;
        global $dbuser;
        global $dbname;
        global $dbpass;

        return $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    }

    

?>