<?php
  session_start(); 
  include 'config/koneksi.php';

  if (isset($_POST['simpan'])) {
    $sql = mysqli_query($con, "INSERT INTO tb_daftar VALUES('','$_POST[nama_user]','$_POST[jk]','$_POST[umur]')");
    $_SESSION['nama'] = $_POST['nama_user'];
    if($sql){
      echo "<script>alert('Berhasil Daftar');document.location.href='soal.php'</script>";
    }else{
      echo "<script>alert('Gagal Daftar');document.location.href='daftar.php'</script>";
    }
  }

 ?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
  </head>
  <body>
  <div class="container">
    <h2 class="alert alert-secondary text-center mt-3">SILAHKAN DAFTAR TERLEBIH DAHULU</h2>

    <form method="post">
      <div class="form-group">
        <label>Nama User</label>
        <input type="text" name="nama_user" class="form-control" placeholder="Nama Anda" required>
      </div>

      <div class="form-group">
        <label>Jenis Kelamin</label>
        <div class="form-check">
        <input type="radio" name="jk" value="l" class="form-check-input" required>
        <label>Laki Laki</label>
        </div>

        <div class="form-check">
        <input type="radio" name="jk" value="p" class="form-check-input" required>
        <label>Perempuan</label>
        </div>
  
        <div class="form-group">
        <label>Umur</label>
        <input type="number" name="umur" class="form-control" placeholder="Umur Anda" required>
      </div>  


      </div>

      <button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
      <button type="reset" name="reset" class="btn btn-danger">RESET</button>


    </form>
  </div>    

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>