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
        $data1=$_POST['namapengguna'];
        $data2=$_POST['katalaluan'];

        //papar data
        echo "Selamat datang $data1<br>";
        echo "Rahsiakan katalaluan anda $data2<br>";
    ?>
</body>
</html>