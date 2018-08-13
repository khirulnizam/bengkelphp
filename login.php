<?php
//login.php
//include "checksession.php";
include "header.template.php";
if (isset($_GET['msg'])){//login error message
    $cardmode="border-warning";
    $msg="Ralat: ".$_GET['msg'];
}else{//no login error message
    $cardmode="border-info";
    $msg="Sila log masuk";
}
//draw panel based on message
?>

        <div class="card <?php echo $cardmode ?>">
            <div class="card-header">
                <?php echo $msg ?>
            </div>
            <div class="card-body">
                <form action="verify.php" method="post">
                    <input type="text" name="namapengguna"
                           placeholder="Nama pengguna" class="form-control">
                    <input type="password" name="katalaluan"
                           placeholder="Kata laluan"
                           class="form-control">
                    <input type="submit" value="Login"
                           class="btn btn-success">
                </form>
            </div>
        </div>

<?php
include "footer.template.php";
?>
