<?php
    //01verify.php
    include "connection.php";
    if(isset($_POST['namapengguna']) && isset($_POST['katalaluan'])){
        $namapengguna=$_POST['namapengguna'];
        $katalaluan=md5($_POST['katalaluan']);

        $sql="select * from pengguna 
            where namapengguna='$namapengguna'
            AND katalaluan='$katalaluan' ";
        $rs=mysqli_query($conn,$sql);
        if(mysqli_num_rows($rs)==1){
            //namapengguna ada, password betul

            //session=gelang
            session_start();
            $_SESSION['sessionid']=session_id();
            $_SESSION['namapengguna']=$namapengguna;
            $_SESSION['namapenuh']=$namapenuh;
            //echo "Selamat datang $namapengguna";
            header ("location: 01formcarianmakan.php?msg=Selamat datang admin $namapengguna");
        }
        else{
            //echo "Tak jumpa<br>";
            //echo "SQL error: ".mysqli_error($conn);
            //echo "<br>SQL: ".$sql;
            header ("location: 01formlogin.php?msg=Namapengguna atau katalaluan tak sah");
        }
    }
    else{
        //redirect
        header ("location: 01formlogin.php?msg=Masukkan namapengguna dan katalaluan");
    }
?>