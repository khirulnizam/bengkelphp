<!DOCTYPE html>
<!-- borangtarikh.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang tarikh</title>

</head>
<body>
    <h1>Borang tarikh</h1>
    <form action="" method="get">
        Senarai tahun guna while<br>
        <select name="tahun" id="tahun">
            <?php
            $tahuni=date('Y');
            $x=$tahuni;
            while($x>=1900){
                echo "<option > tahun $x</option>\n";
                $x--;
            }
            ?>
        </select>
        
        <button type="submit">Submit</button>

        Senarai tahun guna for<br>
        <select name="tahunfor" id="tahunfor">
            <?php
            
            for($x=$tahuni;$x>=1900;$x--){
                echo "<option value='$x'>$x</option>\n";
            }
            ?>
        </select>
        <br>

        Senarai bulan guna tatasusunan/foreach<br>
        <select name="bulan" id="bulan">
            <?php
            $bulan=array('Januari','Februari','Mac','April','Mei','Jun',
                    'Julai','Ogos','September','October','November','December');
            foreach($bulan as $x){
                echo "<option value='$x'>$x</option>\n";
            }
            ?>
        </select>

        Array guna for<br>
        <?php
        $bulan=array('Januari','Februari','Mac','April','Mei','Jun',
        'Julai','Ogos','September','October','November','December');
            for ($i=0;$i<count($bulan); $i++){
                echo $bulan[$i]."<br>";
            }

            echo "Fungsi print_r <br>";
        print_r($bulan);
        ?>

    </form>
</body>
</html>