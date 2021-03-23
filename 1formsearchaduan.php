<?php
include "header.bootslander.php";
?>
<!-- 1formsearchaduan.php -->
<form method="get" action="" class="form-inline">
    <input type="text" name="carian"
    class="form-control">
    <button type="submit" class="btn btn-primary">
        <i class="fa fa-search"></i>
    </button>
</form>

<hr>
Hasil carian<br>

<?php
if(isset($_GET['carian'])){//semak carian
    //echo "user dah klik carian";
    $carian=$_GET['carian'];
    include "connection.php";
    $sql="SELECT id, namapengadu, deskripsi
    FROM aduan
    WHERE deskripsi LIKE '%$carian%'
    OR namapengadu LIKE '%$carian%' ";
    $rs=mysqli_query($db, $sql);
    //print_r($rs);
    ?>

    <table class="table">
        <tr>
            <td>Nama pengadu</td>
            <td>Deskripsi aduan</td>
            <td>Operasi</td>
        </tr>

    <?php
    while($rec=mysqli_fetch_array($rs)){
        //fetch 1 record
        $id=$rec['id'];
        echo "<tr>";
        echo "<td>".$rec['namapengadu']."</td>";
        echo "<td>".$rec['deskripsi']."</td>";
        echo "<td><a class='btn btn-warning' 
                href='1formupdate.php?id=$id'>
                <i class='fa fa-edit'></i></a></td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{//first time page load
    echo "Baru load";
}

?>

<?php
include "footer.bootslander.php";
?>
