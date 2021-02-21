<?php
//formsearch-tempahan.php
include "checksession.php";
include "header.template.php";
include "connection.php";
?>

<h1> Carian tempahan gelanggang</h1>
Selamat datang admin 
<?php echo $_SESSION["namapenuh"] ?> <br>
<form method="get" action="" class="form-inline">
	<input type="text" name="carian"
	class="form-control">
	<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
</form>
<hr>
<?php
if(isset($_GET['carian'])){
	//cari dari db
	$carian=$_GET['carian'];

	//sql search
	$sql="SELECT tempahan.id,namapelanggan, tarikh, telefon, idgelanggang, jenisukan
		FROM tempahan
		INNER JOIN gelanggang
		ON tempahan.idgelanggang=gelanggang.namagelanggang
		WHERE namapelanggan LIKE '%$carian%' ";
	//echo "$sql <br>";
	//execute sql
	$rs=mysqli_query($db, $sql);

	//carian tak dijumpai
	if(mysqli_num_rows($rs)==0){
		echo "Carian nama pelanggan $carian tidak dijumpai<br>";
	}else{ ?>
		<table class="table table-striped table-bordered">
			<tr><td>ID</td>
				<td>Nama Pelanggan</td>
				<td>Telefon</td>
				<td>Tarikh</td>
				<td>Gelanggang</td>
				<td>Tindakan</td>
			</tr>
	<?php
		//fetch by record
		while($rec=mysqli_fetch_array($rs)){
			echo "<tr>";
			echo "<td>".$rec['id']."</td>";
			echo "<td>".$rec['namapelanggan']."</td>";
			echo "<td>".$rec['tarikh']."</td>";
			echo "<td>".$rec['telefon']."</td>";
			echo "<td>".$rec['idgelanggang'].":".
				$rec['jenisukan']."</td>";
			echo "<td>";

			//formsearch-tempahan
			$id=$rec['id'];
			echo "<a href='formupdate-tempahan.php?id=$id'
					class='btn btn-warning'>
					<i class='fa fa-edit'></i></a>";
			echo "<a href='todelete-tempahan.php?id=$id'
					class='btn btn-danger'>
					<i class='fa fa-trash'></i></a>";
			echo "</td>
					</tr>";
		}//end loop
	}

}//end if isset
?>
</table>

<?php
include "footer.template.php";
?>