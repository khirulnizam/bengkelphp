<?php
    include "header.bootslander.php";
?>
<?php
//1insertaduan.php
$namapengadu=$_POST['namapengadu'];
$telefon=$_POST['telefon'];
$deskripsi=$_POST['deskripsi'];
$kategori=$_POST['kategori'];
date_default_timezone_set('Asia/Kuala_Lumpur');
$tarikhmasa=date('Y-m-d H:i:s');

//connect ke database
include ('connection.php');

//sql command
$sql="INSERT INTO aduan 
(namapengadu,telefon,deskripsi,kategori,tarikhmasa)
VALUES ('$namapengadu', '$telefon','$deskripsi',
'$kategori','$tarikhmasa')";

//execute command sql
$rs=mysqli_query($conn,$sql);
if($rs==true){
    echo "Aduan berjaya dihantar";
}
else{
    //if error
    echo "Aduan tidak berjaya dihantar";
}
?>


<?php
    include "footer.bootslander.php";
?>