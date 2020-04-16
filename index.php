<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Covid</title>
  </head>
  <body>
    <!-- Just an image -->
<!-- <nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand" href="#">
    <img src="/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
  </a>
</nav> -->

  <nav class="navbar navbar-light bg-secondary">
  <span class="navbar-brand mb-0 h1">CEK COVID-19</span>
</nav>

  
  
  <center>  

  <h1>Test Online COVID-19</h1>
  <h3>Ayo Cek Disini</h3>

  </center>

  <div class="text-center">
  <img src="img/cor.webp" class="rounded" alt="...">
  </div>
  
  <br>
  <center>

  <?php 
  if (isset($_POST['daftar'])) {
      echo "<script>document.location.href='daftar.php'</script>";
    }    
   ?>

    <form method="post">

  <button type="submit" name="daftar" class="btn btn-dark">
    SOK CEK DISINI
  </button>

  <br><br>
  <h5>PERHATIAN</h5>
  <p>
    Kami tidak mengumumpulkan data apapun pada yang anda berikan pada test  
  </p>
  <p>
    Jika anda merasakan gejala,silahkan isolasi diri sendiri. 
  </p>
  <p>
     Hubungi rumah sakit rujukan bila sakit berlanjut
  </p>
  </center>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>