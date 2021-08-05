<?php
include "header.bootslander.php";
?>
<!-- 00formupdate.php -->
<h1>Simpan rekod baru staff</h1>
<?php
    if(isset($_GET['success'])){
        $success=$_GET['success'];
        echo "<div class='alert alert-success'>
            $success </div>";
    }
    if(isset($_GET['error'])){
        $error=$_GET['error'];
        echo "<div class='alert alert-warning'>
            $error </div>";
    }

?>
<form action="00simpanrekodbaru.php" method="post">
    NoIC
    <input type="text" name="noic" maxlength="12"
    required class="form-control">

    Nama
    <input type="text" name="nama" required 
    class="form-control">

    Bahagian
    <select name="bahagian" class="form-control">
        <option value="JTMK">JTMK</option>
        <option value="JTPP">JTPP</option>
        <option value="JSK">Jabatan Sains Komputer</option>
    </select><br>
    <button type="submit" class="btn btn-primary">Simpan rekod staff</button>
</form>

<?php
include "footer.bootslander.php";
?>