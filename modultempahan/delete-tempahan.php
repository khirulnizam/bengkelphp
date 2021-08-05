<?php
//save as delete-tempahan.php
include "checksession.php";
include "header.bootslander.php";
include "connection.php";
?>
<?php
$id=$_GET['id'];
?>
<h4>Padam rekod <?php echo $id?></h4>
<br>
<?php
//sql to delete
$sql="DELETE FROM tempahan 
      WHERE id ='$id'";

//run sql query
$rs=mysqli_query($conn, $sql);

//feedback operation successfull
if($rs=true){
    echo "Rekod tempahan telah dipadam, ID $id <br>";
}else{
	echo "Rekod tidak berjaya padam, ID $id <br>";
}
?>
<a href="formsearch-tempahan.php"
   class="btn btn-outline-dark">Kembali</a>

<?php
include "footer.bootslander.php";
?>

