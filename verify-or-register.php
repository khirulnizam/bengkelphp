<?php
//verifyp.php
include "connection.php";
//capture form data 
if($_POST['rlogindaftar']=="login"){
	$namapengguna=$_POST['namapengguna'];
	$katalaluan=$_POST['katalaluan'];
	//sql
	$sql="SELECT id, namapengguna, katalaluan,namapenuh from pengguna
		WHERE namapengguna='$namapengguna' AND 
		katalaluan=MD5('$katalaluan') ";
		//echo $sql;
	$rs=mysqli_query($db, $sql);
	//semakan
	if(mysqli_error($db)){
		echo "Ralat sql/db<br>";
	}else{
		if(mysqli_num_rows($rs)==1){
			//padanan dijumpai
			$rec=mysqli_fetch_array($rs);
			session_start();
			$_SESSION["sessionid"]=session_id();
			$_SESSION["namapengguna"]=$rec['namapengguna'];
			$_SESSION["namapenuh"]=$rec['namapenuh'];
			header ("location: 1formsearchaduan.php");
			//echo "berjaya masuk";
			//daftar session
		}//padanan gagal
		else{
			header ("location: login-or-register.php?msg=Nama pengguna atau katalaluan tidah sah");
		}
	}//end found
}//end choose login
else{//user choose daftar
	$namapengguna=$_POST['namapengguna'];
	$katalaluan=$_POST['katalaluan'];
	//sql
	$sql="insert into pengguna(namapengguna,katalaluan)
	VALUES ('$namapengguna',md5('$katalaluan'))";
		//echo $sql;
	$rs=mysqli_query($db, $sql);
	//semakan
	if(mysqli_error($db)){
		echo "Ralat sql/db<br>";
		echo mysqli_error($db);
	}else{
		header ("location: login-or-register.php?msg=Penguna baharu berjaya didaftar. ".
		"Sekarang masukkan namapengguna dan katalaluan anda");
	}
}
?>