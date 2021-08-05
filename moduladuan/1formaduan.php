<?php
    //include "checksession.php";
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

    <?php
        include "connection.php";
        $sql="SELECT kodkategori, deskaduan
        FROM kategoriaduan";
        $rs=mysqli_query($conn, $sql);
    ?>
    Kategori Aduan
    <select name="kategori"
    class="form-control">
    <?php
        while($rec=mysqli_fetch_array($rs)){
            $kod=$rec['kodkategori'];
            $desk=$rec['deskaduan'];
            echo "<option value='$kod'>$desk</option>";
        }//end while
    ?>
    </select>
    <input type="submit" value="Hantar aduan">
    <input type="reset" value="Kosongkan">
</form>
<?php
    include "footer.bootslander.php";
?>