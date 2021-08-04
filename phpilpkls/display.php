<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papar data</title>
</head>
<body>
    <h1>Papar data</h1>
    <?php
        //display.php 
        //2nd file
        //capture data
        $namapengguna=$_POST['namapengguna'];
        $katalaluan=$_POST['katalaluan'];

        //checking
        if($katalaluan==null && $namapengguna==null){
            echo "Pastikan key-in namapengguna & katalaluan";
        }else if($katalaluan==null){
            echo "Pastikan key-in katalaluan";
        }else if($namapengguna==null){
            echo "Pastikan key-in namapengguna";
        }else{
            //papar data
            echo "Selamat datang $namapengguna<br>";
            echo "Rahsiakan katalaluan anda $katalaluan<br>";
            //todo: proses banding dengan database
        }
        
    ?>
</body>
</html>