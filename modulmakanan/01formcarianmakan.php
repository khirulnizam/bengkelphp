<?php
    //checksession
    session_start();
    if (isset($_SESSION['namapengguna'])){
        //echo "Admin: ".$_SESSION['namapengguna'];
    }else{
        //redirect
        header ("location: 01formlogin.php?msg=Sila login dahulu");
    }
    //01formcarianmakan.php
    include "..\header.bootslander.php";
?>
<div>
    <?php
        if (isset($_SESSION['namapengguna'])){
            echo "Admin: ".$_SESSION['namapengguna'];
        }
    ?>
</div>
<form action="" method="get"
    class="form-inline">
    Carian menu
    <input type="text" name="carian"
    class="form-control">
    <button type="submit" 
    class="btn btn-primary">Cari</button>
</form>
<?php
    if(isset($_GET['msg'])){
        echo "<div class='alert alert-success'> ";
        echo $_GET['msg'];
        echo "</div>";
    }
?>
<?php
    if(isset($_GET['carian'])){
        $carian=$_GET['carian'];
    }else{
        $carian="";
    }
    
    //sql
    $sql="select makanan.id, menu, harga, kategori, deskategori
    FROM makanan
    INNER JOIN kategorimenu
    ON kategori=kodkategori
    where menu like '%$carian%' 
    or kategori like '%$carian%' ";
    //run query
    include "connection.php";
    $rs=mysqli_query($db, $sql);

    //ada padanan?
    if(mysqli_num_rows($rs)==0){
        echo "Tiada padanan dijumpai<br>";
        echo "$sql";
        echo mysqli_error($db);
    }//tiada padanan
    else{
        //berjaya jumpa carian
?>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Nama menu</th>
            <th scope="col">Harga</th>
            <th scope="col">DesKategori</th>
            <th scope="col">Tindakan</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            while($rec=mysqli_fetch_array($rs)){
                echo "<tr>";
                $id=$rec['id'];
                echo "<td>".$rec['id']."</td>";
                echo "<td>".$rec['menu']."</td>";
                echo "<td> RM".sprintf("%01.2f", $rec['harga'])."</td>";
                echo "<td>".$rec['deskategori']."</td>";
                echo "<td><a href='01formupdatemakan.php?id=$id' 
                class='btn btn-warning'>Edit</a></td>";
                echo "<td><a href='01deletemakan.php?id=$id' 
                class='btn btn-danger'>Padam</a></td>";
                echo "</tr>";
            }?>
        </tr>
        </tbody>
    </table>

<?php

    }//paparan rekod
?>

<?php
    include "footer.bootslander.php";
?>