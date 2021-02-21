<?php
//loginfyp.php
include "header.template.php";
if (isset($_GET['msg'])){//login error message
    $msg=$_GET['msg'];
    echo "<div class='alert alert-warning'>
    	Ralat: $msg </div>";

}
?>
<h1>Login masuk sistem </h1>
<form method="post" action="verifyp.php">
	Namapengguna
	<input type="text" name="namapengguna"
	class="form-control">
	Katalaluan
	<input type="password" name="katalaluan"
	class="form-control">
	<input type="submit" value="Login Masuk"
	class="btn btn-success">
</form>
<?php
//loginfyp.php
include "footer.template.php";
?>