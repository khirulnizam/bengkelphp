<?php
include "checksession.php";
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

include "connection.php";
$carian="";
if(isset($_GET['carian'])){//semak carian
    $_GET['carian']="";
    $carian="";
}else{
    //echo "user dah klik carian";
    $carian=$_GET['carian'];
}
    
    $sql="SELECT aduan.id, namapengadu, deskripsi, kategori, deskaduan
    FROM aduan
    INNER JOIN kategoriaduan
    ON aduan.kategori=kategoriaduan.kodkategori
    WHERE deskripsi LIKE '%$carian%'
    OR namapengadu LIKE '%$carian%' ";
    $rs=mysqli_query($db, $sql);
    echo mysqli_error($db);
    ?>

    <table class="table">
        <tr>
            <td>Nama pengadu</td>
            <td>Deskripsi aduan</td>
            <td>Kategori aduan</td>
            <td>Operasi</td>
        </tr>

    <?php
    while($rec=mysqli_fetch_array($rs)){
        //fetch 1 record
        $id=$rec['id'];
        
        echo "<tr>";
        echo "<td>".$rec['namapengadu']."</td>";
        echo "<td>".$rec['deskripsi']."</td>";
        $kataduan=$rec['kategori']." ".$rec['deskaduan'];
        echo "<td> $kataduan </td>";
        echo "<td><a class='btn btn-warning' 
                href='1formupdate.php?id=$id'>
                <i class='fa fa-edit'></i></a>";
        echo "<a class='btn btn-danger' 
                href='1confirmdeleteaduan.php?id=$id'>
                <i class='fa fa-trash'></i></a></td>";
        echo "</tr>";
    }


?>
</table>

<?php
include "footer.bootslander.php";
?>
