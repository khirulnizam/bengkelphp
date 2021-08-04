<!DOCTYPE html>
<!-- login.php 
    file pertama -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hantar password</title>
</head>
<body>
    <h1>Hantar password</h1>
    <form action="display.php" method="POST">
        Nama pengguna
        <input type="text" name="namapengguna"><br>
        Katalaluan
        <input type="password" name="katalaluan"><br>
        <button type="submit">Login</button>
    </form>
    
</body>
</html>