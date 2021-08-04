<!DOCTYPE html>
<!-- layout-table.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include "navbar.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
            Jadual
                <table class="table table-striped">
                    <thead>
                    <tr><td>id</td>
                        <td>Nama</td>
                        <td>Tarikh lahir</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Khirulnizam Abd Rahman</td>
                        <td>03/08/2021</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Aminah Hassan</td>
                        <td>03/08/2021</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Abu Bakar Hasan</td>
                        <td>03/08/2021</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3">
                Menu
                <div class="d-grid gap-2">
                    <a href="http://bit.ly/fstmkuis" class="btn btn-info">Youtube</a>
                    <a href="http://fb.com/kuis.fstm" class="btn btn-info">Facebook</a>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>