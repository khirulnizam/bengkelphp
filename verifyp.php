<?php
//verifyp.php
include "connection.php";
//capture form data 
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
		header ("location: formsearch-tempahan.php");
		//echo "berjaya masuk";
		//daftar session
	}//padanan gagal
	else{
		header ("location: loginfyp.php?msg=Nama pengguna atau katalaluan tidah sah");
	}
}
?>