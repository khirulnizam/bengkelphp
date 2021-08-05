<?php
//include "checksession.php";
include "header.bootslander.php";
?>
<?php

$id=$_GET['id'];
?>
<h4>Anda pasti nak padam rekod <?php echo $id?> ?
</h4>
<br>
<a href="00delete.php?id=<?php echo $id ?>"
   class="btn btn-danger">YA</a>
<a href="00formcarian.php"
   class="btn btn-outline-dark">TIDAK</a>

<?php
include "footer.bootslander.php";
?>

