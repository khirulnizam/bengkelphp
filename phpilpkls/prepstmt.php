<?php
include("database.php");
if (isset($_POST["submit"])) {
    $nama_murid = $_POST['nama_murid'];
    $umur_murid = $_POST['umur_murid'];

    $stmt = $conn->prepare("insert into murid(nama_murid, umur_murid)
    values(?,?)");
    $stmt->bind_param("si",$nama_murid, $umur_murid);
    $stmt->execute();
    echo "pendaftaran berjaya";
    $stmt->close();
    $conn->close();

?>
<html>

<head>
    <title>Maklumat Murid</title>
</head>

<body>

    <form class="box" method="post">
        <div class="logo"></div>
        <h1>Sila Masukkan Maklumat Murid</h1>
        <input type="text" name="nama_murid" placeholder="Nama Murid" required>
        <input type="text" name="umur_murid" placeholder="Umur Murid" required>
        <input type="submit" name="" value="Daftar">
    </form>
    <a href="/index.php" class="button" style="vertical-align:middle"><span>Kembali</span></a>
    </body>

<style>
    .button {
        display: inline-block;
        border-radius: 2px;
        background-color: #49a7e6;
        border-radius: 48px;
        color: #FFFFFF;
        text-align: center;
        font-size: 28px;
        padding: 20px;
        width: 200px;
        transition: all 0.5s;
        cursor: pointer;
        margin-top: 550px;
    }

    .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .button span:after {
        content: '\00AB';
        position: absolute;
        opacity: 0;
        top: 0;
        left: -20px;
        transition: 0.5s;
    }

    .button:hover span {
        padding-left: 25px;
    }

    .button:hover span:after {
        opacity: 1;
        left: 0;
    }

    .logo {
        background: url(logo.jpg);
        width: 220px;
        height: 220px;
        border-radius: 50%;
        margin: 0 auto;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: #34495e;
    }

    .box {
        width: 300px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #191919;
        text-align: center;
    }

    .box h1 {
        color: white;
        font-weight: 500;
    }

    .box input[type="text"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #3498db;
        padding: 14px 10px;
        width: 200px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
    }

    .box input[type="text"]:focus {
        width: 280px;
        border-color: #2ecc71;
    }

    .box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: white;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer;
    }

    .box input[type="submit"]:hover {
        background: #2ecc71;
    }
</style>
</html>