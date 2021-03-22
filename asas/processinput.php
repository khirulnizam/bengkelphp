<?php
    //filename processinput.php
    $namapengguna=$_GET['namapengguna'];
    $katalaluan=$_GET['katalaluan'];
    $masa=$_GET['masa'];
    $tarikh=$_GET['tarikh'];


    if($namapengguna!=null &&
        $katalaluan!=null){//do if not null
        //cetak nama
        echo "Welcome $namapengguna <br>";
        //jangan praktis
        echo "Katalaluan anda $katalaluan <br>";
        //masa
        echo "Masa sekarang ".date('g:i a', strtotime($masa));
        echo "<br>"; 
        //tarikh
        echo "Tarikh pilihan $tarikh <br>";
        echo date('d M Y', strtotime($tarikh));
    }//end if
    else{
        echo "Sila masukkan semua makumat";
    }
?>
