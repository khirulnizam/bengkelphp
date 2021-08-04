<!DOCTYPE html>
<!-- pembolehubah.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembolehubah PHP</title>
</head>
<body>
    <h1>Pembolehubah PHP</h1>
    <!-- contoh html comment -->

    <?php
        $harga=$_GET['harga'];
        $bil=$_GET['bil'];
        if(is_numeric($harga) && is_numeric($bil)){
            $jumlah=$harga*$bil;
            //komen dalam php
            $saya="Ali Abu";
            $noic="770707077070";
            //$harga=5.50;
            //papar data
            echo "Nama saya $saya <br>\n";
            echo "NoIC saya $noic <br>\n";
            echo "Harga beras $bil kilo adalah RM".sprintf("%01.2f", $jumlah);
        }else{
            echo "Hanya masukkan nombor dalam ruangan harga dan kilo";
        }//end else

    ?>
</body>
</html>