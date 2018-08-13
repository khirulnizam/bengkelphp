<?php
include "checksession.php";
include "header.template.php";
include "connection.php";
$id=$_GET['id'];

//sql to capture old record
$sql="SELECT * FROM pelajar
      WHERE IDPelajar='$id' ";
//run sql query
$rs = mysqli_query($db, $sql);
//capture record
$record=mysqli_fetch_array($rs);
?>
<!-- formupdate.php -->
<form action="saveupdate.php" method="get">
    <h4>Kemaskini rekod pelajar</h4>
    <input type="hidden" name="id"
           value="<?php echo $id ?>">
    Nama Pelajar
    <input type="text" name="namapel"
           class="form-control"
           value="<?php echo $record['NamaPel']?>">

    Alamat Pelajar
    <input type="text" name="alamat"
           class="form-control"
           value="<?php echo $record['Alamat']?>">

    <input type="submit" value="Simpan"
    class="btn btn-primary">
    <a href="searchadmin.php"
       class="btn btn-outline-dark">KEMBALI</a>
</form>
<?php
include "footer.template.php";
?>