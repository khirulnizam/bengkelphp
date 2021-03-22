<!-- github.com/khirulnizam/bengkelphp/ -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h1>Borang log masuk </h1>
                <form method="get" action="processinput.php">
                    Nama pengguna
                    <input type="text" name="namapengguna" 
                    placeholder="Nama pengguna"
                    class="form-control">
                    Kata laluan
                    <input type="password" name="katalaluan" 
                    class="form-control">
                    Masa
                    <input type="time" name="masa" 
                    class="form-control">
                    Tarikh
                    <input type="date" name="tarikh" 
                    class="form-control">
                    Tahap pengguna
                        <?php
                            $tahap=array('Admin ulung',
                                'Awam',
                                'Awam terhad',
                                'Capaian terhad',
                                'Pembantu admin'
                            );
                        ?>
                    <select class="form-control">
                        <?php
                            foreach($tahap as $t){
                                echo "<option>$t</option>";
                            }
                        ?>
                    </select>
                    <input type="submit" value="Login" 
                    class="btn btn-primary">
                </form>
                
            </div>
            <div class="col-sm-4 bg-warning">
            </div>
        </div> 
    </div>
  </body>
</html>