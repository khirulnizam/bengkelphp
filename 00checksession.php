<?php
//00checksession.php
//lock, ada tak gelang
session_start();
if(isset($_SESSION['namapenuh']) && 
        isset ($_SESSION['namapengguna']) ){
}else{//tiada gelang REJECT
    header ("location: 00login.php?error=Pengguna tak sah, sila login");
}
?>