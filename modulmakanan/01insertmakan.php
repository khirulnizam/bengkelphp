<?php
include "connection.php";
//01insertmakan.php

//fetch data
$menu=$_POST['menu'];
$harga=$_POST['harga'];
$kategori=$_POST['kategori'];

//sql
$sql="insert into makanan 
    (menu, harga, kategori)
    values
    ('$menu','$harga','$kategori')";
//execute
$rs=mysqli_query($conn, $sql);
//echo "Sql: $sql <br>";//debugging
if($rs==false){//gagal
    //debug
    echo "Error: ".mysqli_error($conn);
}else{//berjaya simpan rekod baru
    //echo "Berjaya simpan rekod";
    header ("location: 01forminsertmakan.php?msg=Berjaya simpan rekod");//redirect
}
?>