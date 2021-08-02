<?php
include "01checksession.php";
include "connection.php";
//01updatemakan.php

//fetch data
$id=$_POST['id'];
$menu=$_POST['menu'];
$harga=$_POST['harga'];
$kategori=$_POST['kategori'];

//sql
$sql="update makanan set
    menu='$menu',
    harga='$harga',
    kategori='$kategori' 
    where id='$id' ";
//execute
$rs=mysqli_query($db, $sql);
//echo "Sql: $sql <br>";//debugging
if($rs==false){//gagal
    //debug
    echo "Error: ".mysqli_error($db);
}else{//berjaya simpan rekod baru
    //echo "Berjaya simpan rekod";
    header ("location: 01formcarianmakan.php?msg=Berjaya kemaskini menu $menu");//redirect
}
?>