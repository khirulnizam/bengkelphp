<?php
//file name forminsert-tempahan.php
include "checksession.php";
include "header.template.php";
include "connection.php";
?>
<h1>Borang tempahan gelanggang</h1>
<form method="post" action="">
	Nama pelanggan
	<input type="text" name="namapelanggan"
	class="form-control">
	Telefon
	<input type="text" name="telefon" 
	class="form-control">
	Tarikh penggunaan gelanggang
	<input type="date" name="tarikh"
	class="form-control">

	<?php
		//sql query untuk rekod dari jadual gelanggang
		$sqlgel="SELECT * FROM gelanggang";
		$rsgel=mysqli_query($db, $sqlgel);
	?>

	Pilih gelanggang
	<select name="idgelanggang" class="form-control">
		<?php
		while ($recgel=mysqli_fetch_array($rsgel)){
			$namagel=$recgel['namagelanggang'];
			$jenisukan=$recgel['jenisukan'];
			echo "<option value='$namagel'>$namagel - $jenisukan </option>";
		}
		?>
	</select>

	<input type="submit" value="Simpan tempahan" class="btn btn-success">
</form>

<hr>

<?php
//simpan rekod baharu
if(isset($_POST['namapelanggan']) &&
			isset($_POST['telefon']) &&
			isset($_POST['tarikh'])){
			//simple validation
	//simpan dalam db
	$namapelanggan=$_POST['namapelanggan'];
	$tarikh = $_POST['tarikh'];
	$telefon=$_POST['telefon'];
	//sql insert
	$sql="INSERT INTO tempahan (namapelanggan, tarikh, telefon) 
	VALUES ('$namapelanggan','$tarikh','$telefon')";
	//echo "$sql <br>";
	//execute sql
	$rs=mysqli_query($db, $sql);
	//semak 
	if($rs==true){
		echo "Tempahan untuk $namapelanggan 
		berjaya disimpan";
	}else{
		echo "Tempahan gagal disimpan";
		echo mysqli_error($db);
	}
}
else{
	echo "Masukkan data nama, telefon, tarikh tempahan";
}

include "footer.template.php";
?>
