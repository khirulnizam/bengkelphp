<?php
//saveupdate-tempahan.php
include "checksession.php";
include "header.bootslander.php";
include "connection.php";


//update rekod
if(isset($_POST['namapelanggan']) &&
			isset($_POST['telefon']) &&
			isset($_POST['tarikh'])){
			//simple validation
	//simpan dalam db
	$id=$_POST['id'];
	$namapelanggan=$_POST['namapelanggan'];
	$tarikh = $_POST['tarikh'];
	$telefon=$_POST['telefon'];
	//sql insert
	$sql="UPDATE tempahan 
		SET namapelanggan='$namapelanggan', 
		tarikh='$tarikh', telefon='$telefon' 
		WHERE id ='$id'";
	//echo "$sql <br>";
	//execute sql
	$rs=mysqli_query($conn, $sql);
	//semak 
	if($rs==true){
		echo "Kemaskini untuk $namapelanggan 
		berjaya disimpan";
	}else{
		echo "Tempahan gagal dikemaskini";
		echo mysqli_error($conn);
	}
}
else{
	echo "Masukkan data nama, telefon, tarikh tempahan";
}

include "footer.bootslander.php";
?>