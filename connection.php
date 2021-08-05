<?php
//connection.php

$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bengkelphp";

$conn=mysqli_connect($dbservername,$dbusername,
            $dbpassword, $dbname);
if($conn==true){
    //semak database connected
    //echo "Database connected";
}
else{
    //error connection db
    exit(1);
}
?>