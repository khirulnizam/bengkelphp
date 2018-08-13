<form action="" method="get">
    <h3>Carian nama pelajar</h3>
    <input type="text" name="txtsearch">
    <input type="submit" value="Cari">
</form>

<?php
//listing.php
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
        <table width="90%" border="1">
            <tr align="center">
            <td>ID pelajar </td>
            <td>Nama pelajar</td>
            <td>Alamat</td>
            </tr>
    <?php
        while($record=mysqli_fetch_array($rs)) {
            echo  "<tr>";
            echo  "<td>".$record['IDPelajar']."</td>";
            echo  "<td>".$record['NamaPel']."</td>";
            echo  "<td>".$record['Alamat']."</td>";
            echo "</tr>";
        }//end while
        echo "</table>";
    }
?>