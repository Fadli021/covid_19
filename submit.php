<?php
    include "config/koneksi.php";
    session_start();
    if($_POST["btn_nilai"]){
        $jawaban = $_POST["jawaban"];
        $benar=0;
        if(count($_POST["jawaban"]) <1 ){
          //  echo "<script>alert('Anda belum menjawab soal');document.location.href=index.php</script>";
        }else{
            foreach($jawaban as $nmr => $nilai){
                $data_soal =mysqli_query($con, "SELECT * FROM tb_soal where id_soal='$nmr'");
                
                $data_jawab = mysqli_fetch_array($data_soal);
                if($data_jawab["knc_jawaban"] == $nilai){
                    $benar++;    
                }
            }
           // echo "Total Benar: ".$benar ;
            if ($benar <= 7){
                $message = "Resiko Anda Untuk Terkena Virus COVID-19 Rendah";
                // echo "Resiko Terkena Virus COVID-19 Rendah";
            }elseif ($benar >= 7 && $benar <=15){
                $message = "Resiko Anda Untuk Terkena Virus COVID-19 Sedang ";
            }else{
                $message = "Resiko Anda Untuk Terkena Virus COVID-19 Tinggi";
            }
            // $data_jawab = mysqli_query($con,"INSERT INTO tb_hasil values ('',$message)");
        }
    }
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
            <tr>
                <th style ="text-align:center" class="bg-secondary" scope="col"><?php echo "Hasil Pengecekan Resiko Terkena COVID-19  ".$_SESSION['nama']; ?></th>
            </tr>
            </thead>
    </table>
        <br></br>
        <br></br>
        <center><b><?php
                    echo $message;
                ?></b>
                <br>
                <b><?php 
                  echo "Jumlah Nilai Kamu " .$benar;
                 ?></b>
                 <br>
                 <b><?php 
                  
                  ?></b>
        <br></br>
        <br></br>
        <br></br>
        <center><b><a href="http://localhost/covid/soal.php"><input type='button' class="btn btn-outline-primary" value= 'Cek Lagi '/></a></b></center>
        
</body>
  