<?php
include "checksession.php";
include "header.template.php";
?>
<h4>Carian nama pelajar </h4>
<!-- searchadmin.php -->
<form action="" method="get" class="form-inline">

    <input type="text" name="txtsearch"
    class="form-control">
    <input type="submit" value="Cari"
    class="btn btn-info">
</form>

<?php
    include "connection.php";
    $searchName="";
    if (isset($_GET['txtsearch'])){ //notice
        $searchName= $_GET['txtsearch'];
    }

    //sql command
    $sql="SELECT IDPelajar,NamaPel,Alamat FROM pelajar
          WHERE NamaPel LIKE '%$searchName%' ";

    //run sql
    $rs=mysqli_query($db, $sql);
    if($rs==false) {//if sql error
        echo("SQL Error : " . mysqli_error($db));
    }

    //no record match
    if(mysqli_num_rows($rs)==0){
        echo ("Carian tidak dijumpai...<br>");
    }
    else{//listing record
    ?>
    <br>
    <table class="table table-hover">
            <tr>
            <td>ID pelajar </td>
            <td>Nama pelajar</td>
            <td>Alamat</td>
            <td>Padam/kemaskini</td>
            </tr>
    <?php
        while($record=mysqli_fetch_array($rs)) {
            echo  "<tr>";
            echo  "<td>";
            echo $record['IDPelajar']."</td>";
            echo  "<td>".$record['NamaPel']."</td>";
            echo  "<td>".$record['Alamat']."</td>";
            //button delete
            $x=$record['IDPelajar'];
            echo "<td>
                    <a href='confirmdelete.php?id=$x'
                    class='btn btn-danger'>
                    <i class='fa fa-trash'></i>
                    </a>  ";
            echo "<a href='formupdate.php?id=$x'
                    class='btn btn-warning'>
                    <i class='fa fa-edit'></i>
                    </a> 
                    </td>";
            echo "</tr>";
        }//end while
        echo "</table>";
    }
?>

<?php
include "footer.template.php";
?>
