<!DOCTYPE html>
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
        //komen dalam php
        $saya="Ali Abu";
        $noic="770707-07-7070";
        $harga=5.50;
        //papar data
        echo "Nama saya $saya <br>\n";
        echo "NoIC saya $noic <br>\n";
        echo "Harga barang ini RM".sprintf("%01.2f", $harga);
        //printf
        //sprintf

    ?>
</body>
</html>