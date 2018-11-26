<?php
 //Connect to database
 $USER     = "root";
 $PASSWORD = "pass";
 $DBNAME   = "hardwarestore";
 $conn = mysqli_connect("localhost", $USER, $PASSWORD, $DBNAME)
            or die("mySQL server connection failed");
?>