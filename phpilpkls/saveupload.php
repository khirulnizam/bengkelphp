<?php
//saveuploa.php
    $targetdir="imageuploads/";
    $check=getimagesize($_FILES['filetoupload']['tmp_name']);

    //semak format imej
    if($check!== false){
        //imej
        echo "Betul fail imej ".$check['mime'];
        //upload ke server
        $target_file = $targetdir . basename($_FILES["filetoupload"]["name"]);
        move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file);
    }else{
        echo "Bukan imej ".$check['mime'];
    }


?>