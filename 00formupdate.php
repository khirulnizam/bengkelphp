<?php
include "00checksession.php";
if($_SESSION['tahapcapaian']!="superadmin"){
    header ('location: 00login.php?error=Tiada hak capaian');
}
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

<?php
    include "connection.php";
    $id=$_GET['id'];
    $sql="SELECT * FROM staf
        WHERE id ='$id' ";
    $result=mysqli_query($conn,$sql);
    $rec=mysqli_fetch_array($result);
    $id=$rec['id'];
    $noic=$rec['noic'];
    $nama=$rec['nama'];
    $bahagian=$rec['bahagian'];
?>
<form action="00simpanupdate.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id ?>" >
    NoIC
    <input type="text" name="noic" maxlength="12"
    required class="form-control"
    value="<?php echo $noic ?>" >
    
    Nama
    <input type="text" name="nama" required 
    class="form-control" 
    value="<?php echo $nama ?>" >

    Bahagian
    <select name="bahagian" class="form-control">
        <?php
            $bhgn=array('JTMK','JTPP','JSK');
            foreach ($bhgn as $b){
                if ($b==$bahagian){
                    echo "<option value='$b' selected>$b</option>\n";
                }else{
                    echo "<option value='$b' >$b</option>\n";
                }
                
            }
        ?>
    </select><br>
    <button type="submit" class="btn btn-primary">Simpan rekod staff</button>
</form>

<?php
include "footer.bootslander.php";
?>