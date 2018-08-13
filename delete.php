<?php
include "header.template.php";
include "connection.php";
?>
<?php
$id=$_GET['id'];
?>
<h4>Padam rekod <?php echo $id?></h4>
<br>
<?php
//sql to delete
$sql="DELETE FROM pelajar 
      WHERE IDPelajar ='$id'";

//run sql query
$rs=mysqli_query($db, $sql);

//feedback operation successfull
if($rs=true){
    echo "Rekod telah dipadam, ID $id ";
}
?>
<a href="searchadmin.php"
   class="btn btn-outline-dark">Kembali</a>

<?php
include "footer.template.php";
?>

