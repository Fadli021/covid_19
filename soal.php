<?php
    error_reporting(0);
    include "config/koneksi.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <title>Pengecekan COVID-19</title>
    </head>

    <body>
        <table class="table table-striped">
            <thead>
              <h1 class="alert alert-white text-center text-black"><?php echo "Selamat Datang ".$_SESSION['nama']; ?></h1>
            </thead>
            <thead>
            
                <tr class="bg-secondary">
                    <th scope="col">Nomor</th>
                    <th scope="col">Soal</th>
                    <th scope="col">YA</th>
                    <th scope="col">TIDAK</th>
                </tr>
                </div>
            </thead>
            <tbody>
            <?php
                $nmr=0;
                $soal = mysqli_query($con,"SELECT * FROM tb_soal");
                while($data=mysqli_fetch_array($soal)){
                  $nmr ++; 
            ?>
            <form method='post' name="form1" id="form1" action="submit.php">
                <tr>
                    <th scope="col"><?php echo $nmr; ?></th>
                    <td> <?php echo $data["soal"]?></td>
                    <td><input type="radio" value="ya" name="jawaban[<?php echo $data['id_soal']?>]" required><?php echo $data["ya"]?></td>
                    <td><input type="radio" value="tidak" name="jawaban[<?php echo $data['id_soal']?>]" required><?php echo $data["tidak"]?><br></td>
                </tr>
                <?php
                     }
                ?>
               
               
            </tbody>
        </table>
        <hr>
        <center>
        <!-- <input type="submit" class="btn btn-outline-primary" name="btn_nilai" id="simpan" value="Simpan"/> -->
        <!-- <button onclick="myFunction()">Click me</button> -->
        <input type='submit' class="btn btn-primary" name='btn_nilai' value= 'Hasil'/>
        <input type='reset' class="btn btn-danger" name='resert' value= 'Reset'/>
        

        </form>
        </center>
        <br>
        <script src="js/jquery/jquery-3.5.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body> 
</html>
