<?php
include "header.bootslander.php";
?>
<!-- 00forminsertimage.php -->
<form action="00simpanrekodstafgambar.php" 
method="post" 
enctype="multipart/form-data">
    Nama 
    <input type="text" name="nama" ><br>
    NoIC
    <input type="number" name="noic" maxlength="12"><br>
    Kod Bahagian
    <input type="text" name="bahagian"><br>
    Muat-naik gambar staf
    <input type="file" name="fileToUpload"><br>
    <button type="submit">Simpan rekod staf</button>
</form>
<?php
include "footer.bootslander.php";
?>