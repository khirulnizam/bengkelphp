<?php
include "checksession.php";
include "header.template.php";
include "connection.php";
//saveupdate.php

//capture all data
$id=$_GET['id'];
$namapel=$_GET['namapel'];
$alamat=$_GET['alamat'];

//sql to update to sql query
$sql="UPDATE pelajar 
      SET NamaPel='$namapel',Alamat='$alamat'
      WHERE IDPelajar='$id' ";

//run sql query - save record to dbserver
$rs=mysqli_query($db, $sql);

//berjaya/tidak
if ($rs==true){
    echo "Kemaskini $namapel berjaya disimpan";
}else{//error
    echo "Kemaskini tidak berjaya disimpan";
    echo mysqli_error($db);
}
//saveupdate.php
?>

<?php
include "footer.template.php";
?>
