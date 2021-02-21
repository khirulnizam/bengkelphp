<?php
//rename todelete-tempahan.php
include "checksession.php";
include "header.template.php";
$id=$_GET['id'];
?>
<h4>Anda pasti nak padam rekod tempahan <?php echo $id?> ?
</h4>
<br>
<a href="delete-tempahan.php?id=<?php echo $id ?>"
   class="btn btn-danger">YA</a>
<a href="formsearch-tempahan.php"
   class="btn btn-outline-dark">TIDAK</a>

<?php
include "footer.template.php";
?>

