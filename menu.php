<!-- menu.php
     YOUR MENU HERE -->
    <h4>Menu selenggaraan rekod aduan</h4>
    <a href="1formsearchaduan.php" class="btn btn-primary btn-block">
    Carian aduan</a>
    <a href="1formaduan.php" class="btn btn-primary btn-block">
    Masukkan aduan</a>
    <!-- footer.template.php -->
    <a href="formsearch-tempahan.php"
    class="btn btn-primary btn-block">
    Carian tempahan </a>
    <a href="forminsert-tempahan.php"
    class="btn btn-primary btn-block">
    Tempahan baharu </a>
<?php
if(!isset($_SESSION["namapengguna"])) { //if session NOT set
    echo '<a href="login-or-register.php" class="btn btn-success btn-block">Login</a>';
}else{
    echo '<a href="logout.php" class="btn btn-primary btn-block">Logout</a>';
} ?>
    <!--  END MENU -->