<?php
//listing.php
    include "connection.php";
    //sql command
    $sql="SELECT IDPelajar,NamaPel,Alamat FROM pelajar";

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