<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h4 class="text-center">FORM LOGIN</h4>
      <hr>

      <form>
        <div class="form-grup">
          <label>Username</label>
          <input type="text" name="" class="form-control" placeholder="Masukkan Username Anda">
        </div>

        <div class="form-grup">
          <label>Password</label>
          <input type="password" name="" class="form-control" placeholder="Masukkan Password Anda">
        </div>

        
        <br>
        <button type="submit" class="btn-primary">LOGIN</button>
        <button type="submit" class="btn-danger">RESET</button>
      </form>
      <br>

    </div>

<!--      if($sql){
          echo '<script>alert("Berhasil Login");document.location="login.php?message=berhasil"; </script>';
          echo $jenis_ujian;
        }else{
          echo '<div class="alert alert-warning">Gagal melakukan Login</div>';
        }

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>