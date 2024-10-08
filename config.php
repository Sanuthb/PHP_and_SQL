<?php
    $localhost='localhost';
    $usename="root";
    $password="";
    $dbname="your_database_name";

    $con=mysqli_connect($localhost,$usename,$password,$dbname);
    if(!$con){
        die('Could not connect: '. mysql_error());
    }
?>
