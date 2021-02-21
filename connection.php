<?php
//chapter 9
//connection.php
$server="localhost";//alamt pangkalan data / ip
$dbuser="root";//db username
$dbpassword="abcd1234";//password db user
$dbname="bengkelphp";//nama database
$db=mysqli_connect($server,
        $dbuser,
        $dbpassword,
        $dbname);
//test db connection
//remove on deployment
if (mysqli_connect_errno($db)) {
    echo "Capaian db gagal: ", mysqli_connect_error($db);
    exit();
}else{
	echo "Berjaya capai pangkalan data<br>";
}
?>