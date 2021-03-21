<?php
//checksession.php
//this script is to check session to verify user login
session_start();
if(!isset($_SESSION["namapengguna"])) { //if session NOT set
    header ("location: login-or-register.php?msg=Sila login dahulu");
}
?>