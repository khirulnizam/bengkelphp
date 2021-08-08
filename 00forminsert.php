<?php
include "00checksession.php";
include "header.bootslander.php";
?>
<!-- 00formupdate.php -->
<h1>Simpan rekod baru staff</h1>
<?php include "00alert.php" ?>
<form action="00simpanrekodbaru.php" method="post">
    NoIC
    <input type="text" name="noic" maxlength="12"
    required class="form-control">

    Nama
    <input type="text" name="nama" required 
    class="form-control">

    Bahagian
    <!-- 00forminsert.php -->
    
    <select name="bahagian" class="form-control">
    <?php
        include "connection.php";
        $sql="SELECT * FROM bahagian";
        $result=mysqli_query($conn, $sql);
        //echo mysqli_error($conn);
        while($rec=mysqli_fetch_array($result)){
            $kodbhgn=$rec['kodbhgn'];
            $desbhgn=$rec['desbhgn'];
            echo "<option value='$kodbhgn'> $desbhgn </option>";
        }
    ?>   
    </select><br>
    <button type="submit" class="btn btn-primary">Simpan rekod staff</button>
</form>

<?php
include "footer.bootslander.php";
?>