<?php
//checksession.php
//this script is to check session to verify user login
session_start();
if(!isset($_SESSION["namapengguna"])) { //if session NOT set
    //echo "You are not logged in,
    //<a href='login.php'>click here to login.</a>";
    //exit(0);
    //redirect
    header ("location: login.php?msg=Sila login dahulu");

}
?>