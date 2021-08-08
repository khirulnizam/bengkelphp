<?php
//00simpanrekodstafgambar.php
if(isset($_FILES["fileToUpload"])) {
    include "connection.php";
    $nama=$_POST['nama'];
    $noic=$_POST['noic'];
    $bahagian=$_POST['bahagian'];
    $imejprofile="";

    //proses upload gambar
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" 
    && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Maaf, file-imej tidak dapat diterima.";
    // if everything is ok, try to upload file
    } else {
        //imej penuhi kriteria
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
            $imejprofile=basename( $_FILES["fileToUpload"]["name"]);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    //simpan rekod


$sql="INSERT INTO staf (nama, noic,bahagian, imejprofile)
    VALUES ('$nama','$noic','$bahagian','$imejprofile')";
$result=mysqli_query($conn, $sql);

if($result==true){//berjaya simpan rekod staf baharu
    echo "Berjaya simpan rekod baharu $nama<br>";
    if($imejprofile!=null){
        //kalau ada gambar sistem papar
        $gambar=$target_dir.$imejprofile;
        echo "<img src='$gambar' width='50%'>";
    }
}
else{
    //tak berjaya
}
?>