<?php
include "01checksession.php";
//01forminsertmakan.php
include "<div class="">header.bootslander.php";
?>
<form action="01insertmakan.php" method="post">
    Nama menu
    <input type="text" name="menu"
    class="form-control">
    Harga
    <input type="text" name="harga"
    class="form-control">
    Kategori
    <select name="kategori" class="form-control">
        <?php
            //list dropdown
            include "connection.php";
            $sql="select * from kategorimenu";
            $rs=mysqli_query($db, $sql);
            while($rec=mysqli_fetch_array($rs)){
                $kod=$rec['kodkategori'];
                $deskategori=$rec['deskategori'];
                echo "<option value='$kod'> $deskategori </option>";
            }//end while

        ?>
    </select>

    <button type="submit" 
    class="btn btn-primary">Simpan</button>
</form>
<?php
    if(isset($_GET['msg'])){
        echo "<div class='alert alert-success'> ";
        echo $_GET['msg'];
        echo "</div>";
    }
?>
<?php
include "footer.bootslander.php";
?>