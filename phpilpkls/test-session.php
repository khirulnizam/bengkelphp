<?php 
session_start();
if (isset($_SESSION['counter'])){
    $_SESSION['counter'] = $_SESSION['counter']+1;
}else{
    $_SESSION['counter'] =10;
    $a=$_SESSION['counter'];
}




 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>trynerorr</title>
</head>
<body>
	<h3 ><?php 
    if(isset($_POST["tambah"])){
        $a=$_SESSION['counter'];
    }
    echo "<p>$a</p>"; ?>
    </h3>
	<form action="" method="post" >
		<button name="tambah" type="submit">tambah</button>
	</form>
</body>
</html>