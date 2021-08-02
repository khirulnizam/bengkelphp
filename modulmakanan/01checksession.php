<?php
//01checksession.php
//this script is to check session to verify user login
session_start();
if(!isset($_SESSION["namapengguna"])) { //if session NOT set
    header ("location: 01formlogin.php?msg=Sila login dahulu");
}
?>