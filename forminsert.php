<?php
include "checksession.php";
include "header.template.php";
?>
<!-- forminsert.php -->
<form action="insertrecord.php" method="get">
    <h4>Masuk rekod pelajar baharu</h4>
    Nama Pelajar
    <input type="text" name="namapel"
           class="form-control">

    Alamat Pelajar
    <input type="text" name="alamat"
           class="form-control">

    <input type="submit" value="Simpan"
    class="btn btn-primary">
</form>
<?php
include "footer.template.php";
?>