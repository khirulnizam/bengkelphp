<!-- 1formsearchaduan.php -->
<form method="get" action="">
    <input type="text" name="carian">
    <input type="submit" value="Carian aduan">
</form>

<hr>
Hasil carian<br>

<?php
if(isset($_GET['carian'])){//semak carian
    echo "user dah klik carian";
    $carian=$_GET['carian'];
    include "connection.php";
    $sql="SELECT namapengadu, deskripsi
    FROM aduan
    WHERE deskripsi LIKE '%$carian%'
    OR namapengadu LIKE '%$carian%' ";
    $rs=mysqli_query($db, $sql);
    //print_r($rs);
    while($rec=mysqli_fetch_array($rs)){
        //fetch 1 record
        echo $rec['namapengadu']."<br>";
        echo $rec['deskripsi']."<hr>";
    }
}
else{//first time page load
    echo "Baru load";
}

?>
