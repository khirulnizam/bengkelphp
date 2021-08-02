<?php 
    //01formlogin.php
    include "../header.bootslander.php";
?>
<h1>Borang login</h1>
<form action="01verify.php" method="post">
    Namapengguna (email)
    <input type="email" name="namapengguna"
    class="form-control">
    Katalaluan
    <input type="password" name="katalaluan"
    class="form-control">
    <button type="submit" class="btn btn-primary">Login</button>
</form>
<?php
    if(isset($_GET['msg'])){
        echo "<div class='alert alert-warning'> ";
        echo $_GET['msg'];
        echo "</div>";
    }
?>


<?php 
    include "../footer.bootslander.php";
?>