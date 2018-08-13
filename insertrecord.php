<?php
include "checksession.php";
include "header.template.php";
include "connection.php";
//insertrecord.php

//capture all data
$namapel=$_GET['namapel'];
$alamat=$_GET['alamat'];

//insert to sql query
$sql="INSERT INTO pelajar(NamaPel,Alamat)
      VALUES ('$namapel','$alamat')";

//run sql query - save record to dbserver
$rs=mysqli_query($db, $sql);

//berjaya/tidak
if ($rs==true){
    echo "Rekod baharu pelajar $namapel berjaya disimpan";
}else{//error
    echo "Rekod tidak berjaya disimpan";
    echo mysqli_error($db);
}
?>

<?php
include "footer.template.php";
?>
