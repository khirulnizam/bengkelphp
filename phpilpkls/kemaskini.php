<?php
//to handle session
//info about client 
session_start();
$_SESSION['username']="kerul";
$_SESSION['fullname']="kerul rahman";

//capture using $_GET
$id=$_GET['id'];
$nama=$_GET['nama'];

//display pilihan
echo "Pelajar untuk dikemaskini $nama <br>";
echo "Admin :".$_SESSION['fullname'];
echo "<br>Session id:".session_id();
echo "<br><a href='logout.php'>logout</a>";

?>