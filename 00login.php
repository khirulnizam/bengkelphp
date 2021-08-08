<?php
 include "header.bootslander.php";
    //00login.php
?>
<?php
    if(isset($_GET['success'])){
        $success=$_GET['success'];
        echo "<div class='alert alert-success'>
            $success </div>";
    }
    if(isset($_GET['error'])){
        $error=$_GET['error'];
        echo "<div class='alert alert-warning'>
            $error </div>";
    }
?>
<h1>Login pengguna</h1>
<form action="00verify.php" method="post">
    Namapengguna
    <input type="text" name="namapengguna"
    class="form-control">
    Katalaluan
    <input type="password" name="katalaluan"
    class="form-control">
    <button type="submit"
    class="btn btn-primary">Login</button>
</form>

<?php
 include "footer.bootslander.php";
?>