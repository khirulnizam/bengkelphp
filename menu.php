<!-- menu.php
     YOUR MENU HERE -->

     <h4>Menu pelajar</h4>
    <a href="searchadmin.php" class="btn btn-primary btn-block">
    Carian pelajar</a>
    <a href="forminsert.php" class="btn btn-primary btn-block">
    Tambah rekod pelajar</a>

<a target="_blank" href="https://www.youtube.com/c/FSTMKUISFakultiSainsTeknologiMaklumat" 
class="btn btn-secondary btn-block">
    Rakaman Youtube BengkelPHP</a>
<!--  MENU LOGIN -->

     <?php
if(!isset($_SESSION["namapengguna"])) { //if session NOT set
    echo '<a href="login.php" class="btn btn-success btn-block">Login</a>';
}else{
    echo '<a href="logout.php" class="btn btn-primary btn-block">Logout</a>';
} ?>

    



    <!-- old reserve 
    <h4>Login/daftar pengguna</h4>
    <a href="01daftarpengguna.php" class="btn btn-primary btn-block">
    Daftar Pengguna</a>

    <h4>Menu makanan</h4>
    <a href="01formcarianmakan.php" class="btn btn-primary btn-block">
    Carian makanan</a>
    <a href="01forminsertmakan.php" class="btn btn-primary btn-block">
    Tambah makanan</a>
    <h4>Menu aduan</h4>
    <a href="1formsearchaduan.php" class="btn btn-primary btn-block">
    Carian aduan</a>
    <a href="1formaduan.php" class="btn btn-primary btn-block">
    Masukkan aduan</a>

    <h4>Menu tempahan gelanggang</h4>
    <a href="formsearch-tempahan.php"
    class="btn btn-primary btn-block">
    Carian tempahan </a>
    <a href="forminsert-tempahan.php"
    class="btn btn-primary btn-block">
    Tempahan baharu </a>

-->
