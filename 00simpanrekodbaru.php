<?php
//00simpanrekodbaru.php
include "connection.php";
//fetch form data
$nama=$_POST['nama'];
$noic=$_POST['noic'];
$bahagian=$_POST['bahagian'];
//sql insert
$sql="INSERT INTO staf(nama, noic, bahagian)
        VALUES ('$nama','$noic','$bahagian')";
$result=mysqli_query($conn,$sql);
if($result==true){
    //berjaya simpan rekod
    header ("location: 00forminsert.php?success=Rekod $nama berjaya disimpan");
    //echo "Berjaya simpan rekod"
}else{
    //gagal simpan
    header ("location: 00forminsert.php?error=Rekod gagal disimpan");
    //echo "GAGAL simpan rekod";
    //echo mysqli_error($conn);
}
?>


<?php
mysqli_close($conn);
?>