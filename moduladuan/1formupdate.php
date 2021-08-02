<?php
    include "checksession.php";
    include "header.bootslander.php";
    include "connection.php";
    $id=$_GET['id'];
    $sql="SELECT namapengadu, telefon,deskripsi, 
    kategori, kodbahagian
    FROM aduan
    WHERE id='$id' ";
    $rs=mysqli_query($db, $sql);
    if(mysqli_num_rows($rs)==1){
        $rec=mysqli_fetch_array($rs);
        $namapengadu=$rec['namapengadu'];
        $telefon=$rec['telefon'];
        $deskripsi=$rec['deskripsi'];
    }
?>
<!-- 1formupdate.php CRUD - update record-->

<h1>Borang Kemaskini Aduan </h1>
<form method="post" action="1updateaduan.php">
    <input name="id" value="<?php echo $id ?>" type="text" readonly>
    Nama pengadu
    <input type="text" name="namapengadu"
    class="form-control"
    value="<?php echo $namapengadu ?>">
    Nombor telefon pengadu
    <input type="text" name="telefon"
    class="form-control"
    value="<?php echo $telefon ?>">
    Deskripsi Aduan
    <textarea name="deskripsi"
    class="form-control"><?php echo $deskripsi ?> </textarea>
    Kategori Aduan
    <select name="kategori"
    class="form-control">
        <option value="K1">Komputer rosak</option>
        <option value="V1">Serangan Virus</option>
        <option value="R1">Rangkaian </option>
    </select>
    <input type="submit" value="Simpan kemaskini">
    <input type="reset" value="Kosongkan">
</form>
<?php
    include "footer.bootslander.php";
?>