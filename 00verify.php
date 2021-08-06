<?php
//00verify.php
//fetch username/password dari db
if(isset($_POST['namapengguna']) && isset($_POST['katalaluan'])){
    //fetch user input
    $namapengguna=$_POST['namapengguna'];
    $katalaluan=md5($_POST['katalaluan']);

    //database ssettings
    include "connection.php";
    //semak database
    $sql="SELECT * FROM pengguna
    WHERE namapengguna='$namapengguna' 
    AND
    katalaluan='$katalaluan' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        session_start();
        //namapengguna dan katalaluan betul dijumpai
        //echo "Nama pengguna wujud";
        $rec=mysqli_fetch_array($result);
        $_SESSION['namapengguna']=$rec['namapengguna'];
        $_SESSION['namapenuh']=$rec['namapenuh'];
        $_SESSION['tahapcapaian']=$rec['tahapcapaian'];
        header("Location: 00formcarian.php");
    
    }else{
        //redirect kepada login form
        header("Location: 00login.php?error=Nama pengguna tidak wujud/ katalaluan salah");
        //echo "Nama pengguna TIDAK wujud/ katalaluan salah";
    }
}else{
    header("Location: 00login.php?error=Sila masukkan namapengguna & katalaluan");
    //echo "Sila masukkan namapengguna & katalaluan";
}

mysqli_close($conn);
?>