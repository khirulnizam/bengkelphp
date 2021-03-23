<?php
    include "header.bootslander.php";
    
?>
<!-- 1formaduan.php 
CRUD - create record
-->
<h1>Borang Aduan </h1>
<form method="post" action="1insertaduan.php">
    Nama pengadu
    <input type="text" name="namapengadu"
    class="form-control">
    Nombor telefon pengadu
    <input type="text" name="telefon"
    class="form-control">
    Deskripsi Aduan
    <textarea name="deskripsi"
    class="form-control"></textarea>
    Kategori Aduan
    <select name="kategori"
    class="form-control">
        <option value="K1">Komputer rosak</option>
        <option value="V1">Serangan Virus</option>
        <option value="R1">Rangkaian </option>
    </select>
    <input type="submit" value="Hantar aduan">
    <input type="reset" value="Kosongkan">
</form>
<?php
    include "footer.bootslander.php";
?>