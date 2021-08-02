<?php
    //01daftarpengguna.php
    include "header.bootslander.php";
?>
<h1>Daftar pengguna</h1>
<form method="post" action="">
    Namapengguna (email)
    <input name="namapengguna" type="email"
    class="form-control">
    
    Katalaluan
    <input name="katalaluan" type="password"
    class="form-control">
    Ulang Katalaluan
    <input name="katalaluan2" type="password"
    class="form-control">
    Nama penuh
    <input name="namapenuh" type="text"
    class="form-control">
    <button type="submit"
    class="btn btn-success">Daftar</button>
</form>

<?php
    if(isset($_POST['namapengguna']) 
        && isset($_POST['katalaluan'])){
        $katalaluan=$_POST['katalaluan'];
        $katalaluan2=$_POST['katalaluan2'];
        $namapengguna=$_POST['namapengguna'];
        $namapenuh=$_POST['namapenuh'];
        if($katalaluan!=null && $katalaluan2!=null
            && $namapengguna!=null){
            if($katalaluan==$katalaluan2){
                echo "Ya betul password sama";

                //simpan dalam table pengguna
                include "connection.php";
                $sql="insert into pengguna
                (namapengguna, katalaluan, namapenuh)
                value('$namapengguna',md5('$katalaluan'),'$namapenuh')";
                //exeucte
                $rs=mysqli_query($db, $sql);
                if($rs==true){
                    echo "Pengguna baru telah didaftarkan $namapengguna";
                }
                else{//gagal daftar
                    echo "Daftar gagal ". mysqli_error($db);
                }
            }
            else{
                echo "Password tak sama";
            }
        }
    }
    else{
        echo "Sila lengkapkan maklumat daftar pengguna!";
    }
?>

<?php
    include "footer.bootslander.php";
?>