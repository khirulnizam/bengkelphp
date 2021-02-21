<?php
//formupdate-tempahan.php
include "checksession.php";
include "header.template.php";
include "connection.php";
//id sent by previous page
$id=$_GET['id'];
//sql to capture old record tempahan
$sql="SELECT id, namapelanggan, tarikh, telefon
	 FROM tempahan
     WHERE id='$id' ";
//run sql query
$rs = mysqli_query($db, $sql);
//capture record
$rec=mysqli_fetch_array($rs);
$namapelanggan=$rec['namapelanggan'];
$tarikh=$rec['tarikh'];
$telefon=$rec['telefon'];
?>

<h1>Borang kemaskini tempahan gelanggang</h1>
<form method="post" action="saveupdate-tempahan.php">
	ID<input type="text" name="id"
	class="form-control"
	value="<?php echo $id ?>" readonly>
	Nama pelanggan
	<input type="text" name="namapelanggan"
	class="form-control" 
	value="<?php echo $namapelanggan ?>">
	Telefon
	<input type="text" name="telefon" 
	class="form-control"
	value="<?php echo $telefon ?>">
	Tarikh penggunaan gelanggang
	<input type="date" name="tarikh"
	class="form-control"
	value="<?php echo $tarikh ?>">
	<input type="submit" value="Simpan tempahan" class="btn btn-success">
</form>

<?php
include "footer.template.php";
?>