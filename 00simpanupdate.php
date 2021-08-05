<?php
//00simpanupdate.php
include "connection.php";
//fetch form data
$id=$_POST['id'];
$nama=$_POST['nama'];
$noic=$_POST['noic'];
$bahagian=$_POST['bahagian'];
//sql update
$sql="UPDATE staf
        SET nama='$nama',noic='$noic',bahagian='$bahagian'
        WHERE id='$id' ";
$result=mysqli_query($conn,$sql);
if($result==true){
    //berjaya simpan rekod
    header ("location: 00formcarian.php?success=Kemaskini $nama berjaya disimpan");
    //echo "Berjaya simpan rekod"
}else{
    //gagal simpan
    header ("location: 00formcarian.php?error=Kemaskini gagal disimpan");
    //echo "GAGAL simpan rekod";
    //echo mysqli_error($conn);
}
?>


<?php
mysqli_close($conn);
?>