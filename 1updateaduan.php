<?php
    include "checksession.php";
    include "header.bootslander.php";
?>
<?php
//1insertaduan.php
$namapengadu=$_POST['namapengadu'];
$telefon=$_POST['telefon'];
$deskripsi=$_POST['deskripsi'];
$id=$_POST['id'];

//connect ke database
include ('connection.php');

//sql command
$sql="UPDATE aduan 
SET namapengadu='$namapengadu',
    telefon='$telefon',
    deskripsi='$deskripsi' 
WHERE id='$id' ";
echo "$sql";
//execute command sql
$rs=mysqli_query($db,$sql);
if($rs==true){
    echo "Aduan berjaya dikemaskini";
}
else{
    //if error
    echo "Aduan tidak berjaya dikemaskini";
}
?>


<?php
    include "footer.bootslander.php";
?>