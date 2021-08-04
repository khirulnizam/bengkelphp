<!-- hello.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang ke PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="card">
            <img src="images/bannerilpkls.png" 
            alt="banner ilpkls">
            <div class="card-body">
            <h1>Selamat datang ke PHP</h1>
            <?php
                echo "Tarikh hari ini ".date("d/m/Y");
            ?>

            <form action="">
                Nama pengguna
                <input type="text" name="username"
                class="form-control">
                Kata laluan
                <input type="password" name="password"
                class="form-control">
                Had Capaian
                <select name="had" id="had" class="form-select">
                    <option value="superadmin">Super admin</option>
                    <option value="admin">Admin</option>
                    <option value="awam">Awam</option>
                </select>
                Email
                <input type="email" name="email"
                class="form-control">
                Tarikh lahir
                <input type="date" name="tarikhlahir"
                class="form-control">
                <button type="submit" onclick="confirm('Betul nak login?');"
                class="btn btn-success">Daftar Login</button>
            </form>
        </div>
    </div>
</body>
</html>