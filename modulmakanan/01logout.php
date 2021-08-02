<?php
//01logout.php
//this script is to check session to verify user login
session_start();
if(isset($_SESSION["namapengguna"])) { //if session NOT set
    session_destroy();
    //echo "Pengguna dah logout";
    //echo "<a href='login.php'>click here to login.</a>";
    header ("location: 01formlogin.php?msg=Sila login dahulu");
}else{
    header ("location: 01formlogin.php");
}
?>