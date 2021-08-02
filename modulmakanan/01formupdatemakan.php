<?php
include "01checksession.php";
//01formupdatemakan.php
include "header.bootslander.php";
include "connection.php";
$id=$_GET['id'];
$sql="select * from makanan 
        where id='$id' ";
$rs=mysqli_query($db, $sql);
$rec=mysqli_fetch_array($rs);
?>
<form action="01updatemakan.php" method="post">
    <input type="hidden" name="id"
    value="<?php echo $id ?>" >
    Nama menu
    <input type="text" name="menu"
    class="form-control" 
    value="<?php echo $rec['menu'] ?>" >
    Harga
    <input type="text" name="harga"
    class="form-control" 
    value="<?php echo $rec['harga'] ?>">
    Kategori
    <input type="text" name="kategori"
    class="form-control" 
    value="<?php echo $rec['kategori'] ?>" >
    <button type="submit" 
    class="btn btn-primary">Simpan Kemaskini</button>
</form>

<?php
include "footer.bootslander.php";
?>