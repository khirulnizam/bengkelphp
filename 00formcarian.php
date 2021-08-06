<?php
    include "00checksession.php";
    include "header.bootslander.php";
?>
<?php
    include "00alert.php";
?>
<?php
if(isset($_SESSION['namapenuh']) && 
        isset ($_SESSION['namapengguna']) ){
            echo "Selamat Datang ".$_SESSION['namapenuh']."<br>";

    }
?>
<form action="" method="get" class="form-inline">
    Carian staf
    <input type="text" name="carian" class="form-control">
    <button type=submit class="btn btn-primary">Cari</button>
</form>
<?php
//00formcarian.php
include "connection.php";

//input carian pengguna
if(isset($_GET['carian'])){
    $carian=$_GET['carian'];
}else{
    $carian="";
}
//00formcarian.php
include "connection.php";

//dapatkan senarai staf dari table staf
$sql="SELECT id, noic, nama, bahagian FROM staf
        WHERE nama LIKE '%$carian%' ";
//sql hantar ke dbserver
//resultset
$result=mysqli_query($conn, $sql);

//tiada padanan dijumpai
if(mysqli_num_rows($result)==0){
    echo "Tiada padanan dijumpai";
}
else{
    //display table
?>
    <!-- html table -->
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>NoIC</td>
                <td>Nama</td>
                <td>Bahagian</td>
                <td>Tindakan</td>
            </tr>
        </thead>

<?php
    //capture record dari $result
    while($rec=mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>". $rec['id']."</td>";
        echo "<td>". $rec['noic']."</td>";
        echo "<td>". $rec['nama']."</td>";
        echo "<td>". $rec['bahagian']."</td>";
        $id=$rec['id'];
        echo "<td> <a href='00formupdate.php?id=$id' 
            class='btn btn-warning'>
             <i class='ri-edit-box-line'></i></a> ";
        echo "<a href='00confirmdelete.php?id=$id' 
             class='btn btn-danger'>
              <i class='ri-delete-bin-line'></i></a> ";
        echo "</td></tr>";
    }//end while
    echo "</table>";
}//end else rekod jumpa
?>




<?php
//tutup db
mysqli_close($conn);
include "footer.bootslander.php";
?>
