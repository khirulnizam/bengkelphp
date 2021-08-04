<!DOCTYPE html>
<!-- form-uploadimage.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muat-naik imej</title>
</head>
<body>
    <h1>Pilih imej untuk dimuat-naik </h1>
    <form action="saveupload.php" 
    method="post"
    enctype="multipart/form-data" >
        <input type="file" name="filetoupload">
        <button type="submit">Upload</button>
    </form>
</body>
</html>