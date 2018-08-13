<?php
//capture username&password
$namapengguna=$_POST['namapengguna'];
$katalaluan=$_POST['katalaluan'];
//sql
include "connection.php";
$sql="SELECT * FROM pengguna
    WHERE namapengguna='$namapengguna' 
    AND 
    katalaluan=MD5('$katalaluan')";
//execute sql
$rs=mysqli_query($db, $sql);
//echo mysqli_error($db);
//echo $sql;
//test password match
if(mysqli_num_rows($rs)==1){//match found
    //register connection dalam server session
    session_start();
    $_SESSION["sessionid"]=session_id();
    $_SESSION["namapengguna"]=$namapengguna;
    //redirect
    header ("location: searchadmin.php");
}
else{//username & password not match
    header ("location: login.php?msg=Pengguna tak sah");
}
?>