<?php
//loginfyp.php
include "header.bootslander.php";
if (isset($_GET['msg'])){//login error message
    $msg=$_GET['msg'];
    echo "<div class='alert alert-warning'>
    	Ralat: $msg </div>";

}
?>
<h1>Login masuk sistem </h1>
<form method="post" action="verify-or-register.php">
	Namapengguna
	<input type="text" name="namapengguna"
	class="form-control">
	Katalaluan
	<input type="password" name="katalaluan"
	class="form-control">
	<input type="radio" name="rlogindaftar" value="login"
	checked>Login
	<input type="radio" name="rlogindaftar" value="daftar">Daftar
	<input type="submit" name="btnlogin" value="Login Masuk atau Daftar"
	class="btn btn-success">
</form>
<?php
//loginfyp.php
include "footer.bootslander.php";
?>