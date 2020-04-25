<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkup Mode</title>
    <link rel="stylesheet" href="style_se.css">
  </head>
  </head>
  <body>
    </div>
    <div class="header">
      <div class="bayangan">
      </div>
      <h1 align="center">
        SELF CHECK UP
      </h1>
    </div>
    <div class="about">
     <br>
      <div class="container">
        <center><strong><form action="" method="POST">
        <div class="col-10 label">
          <label for=""><font color = "black">1. Apakah Anda Kesulitan bernafas ,Nyeri dada yang parah,Sulit untuk bangun,Merasa kebingungan,Penurunan kesadaran?</font></label><br>
          <select class="form-control" name="">
            <option value="1"></option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">2. Apakah Anda mengalami Nafas yang pendek saat istirahat, Ketidakmampuan untuk berbaring karena kesulitan bernafas,Kondisi kesehatan kronis yang anda alami dirasakan lebih berat karena kesulitan bernapas?</font></label><br>
          <select class="form-control" name="">
            <option value="1"></option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">3. Apakah Anda mengalami Demam , Batuk , Bersin , Sakit Tenggorokan , Sulit Bernafas?</font></label><br>
          <select class="form-control" name="">
            <option value="1"></option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">4. Apakah anda pernah muncul gejala sekitar 14 hari setelah travelling ke luar negeri? (China, Italy, Iran, Korea Selatan, Prancis, Spanyol, Jerman, USA) atau ke kota terjangkit (Jakarta, Bali, Solo, Yogyakarta, Pontianak, Manado, Bandung dll)?</font></label><br>
          <select class="form-control" name="">
            <option value="1"></option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">5. Apakah Anda memberikan perawatan atau melakukan kontak dekat dengan seseorang dengan COVID-19 (kemungkinan atau dikonfirmasi) saat mereka sakit (batuk, demam, bersin, atau sakit tenggorokan)?</font></label><br>
          <select class="form-control" name="">
            <option value="1"></option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">6. Apakah Anda memiliki kontak dekat dengan seseorang yang bepergian ke luar Negeri dalam 14 hari terakhir yang menjadi sakit (batuk, demam, bersin, atau sakit tenggorokan)?</font></label><br>
          <select class="form-control" name="">
            <option value="1"></option>
            <option value="2">Ya</option>
            <option value="3">Tidak</option>
          </select>
        </div>
        <div class="col-10 label">
          <label for=""><font color = "black">7. Suhu Tubuh :</font></label>
          <br><input type="text" name="suhu" placeholder=""> <br>
        </div>
        <div id="Submit">
          <br>
        <textarea name="pesan" rows="1" cols="110" placeholder="pesan anda" >
          <?php
            if(isset($_POST['suhu'])) {
              $suhu = $_POST['suhu'];
              if ($suhu >37 ){
                echo "Anda memiliki kemungkinan positif corona, suhu tubuh Anda tinggi segera periksakan diri Anda";
              }else{
                echo "Anda negatif corona, suhu tubuh Anda normal, dan tetap jaga diri";
              }
            }

            ?>
            </textarea>
          </div>
        <div class="col-10 label">
          <label>
          <br><input type="submit" name="Submit" value="Submit" class = "btn btn-success"><br>
           </label>
        </div>
        </form></strong></center>

              </div>
        </div>
    </div>
  </body>
</html>