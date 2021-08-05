<?php
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
$sql="DELETE FROM aduan 
      WHERE id ='$id'";

//run sql query
$rs=mysqli_query($conn, $sql);

//feedback operation successfull
if($rs=true){
    echo "Rekod telah dipadam, ID $id ";
}
?>
<a href="1formsearchaduan.php"
   class="btn btn-outline-dark">Kembali</a>

<?php
include "footer.bootslander.php";
?>

