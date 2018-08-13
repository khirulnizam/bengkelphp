<?php
//chapter 9
//connection.php
$server="localhost";//alamt pangkalan data / ip
$dbuser="root";//db username
$dbpassword="";//password db user
$dbname="bengkelphp";//nama database
$db=mysqli_connect($server,
        $dbuser,
        $dbpassword,
        $dbname);
//test db connection
//remove on deployment
if (mysqli_connect_errno($db)) {
    echo "Connect failed: ", mysqli_connect_error($db);
    exit();
}

?>