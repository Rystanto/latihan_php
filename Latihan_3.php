<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Latihan 3</title>
  </head>
  <body>

    <b><h1>Identitas Siswa :</h1></b>
    <br>

    <div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
        <label for="namaSiswa">Nama Siswa</label>
        <input type="text" class="form-control" id="namaSiswa" name="nama" placeholder="">
    </div>
    <div class="form-group">
        <label for="kelasSiswa">Kelas</label>
        <input type="text" class="form-control" id="kelasSiswa" name="kelas" placeholder="">
    </div>
    <b><h1>Nilai Siswa :</h1></b>
    <br>
    <div class="form-group">
        <label for="produktif">Nilai Produktif</label>
        <input type="text" class="form-control" id="produktif" name="produktif" placeholder="">
    </div>
    <div class="form-group">
        <label for="normatif">Nilai Normatif</label>
        <input type="text" class="form-control" id="normatif" name="normatif" placeholder="">
    </div>
    <div class="form-group">
        <label for="melok">Nilai Mulok</label>
        <input type="text" class="form-control" id="melok" name="melok" placeholder="">
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
    <h1><hr></h1>
</form>
    </div>


<?php 
 if(isset($_POST['kirim'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $produktif = $_POST['produktif'];
    $normatif = $_POST['normatif'];
    $melok = $_POST['melok'];
    $rata = ($produktif + $normatif + $melok)/3;
    

    $nilai = $produktif;
 if ($nilai > 90) {
    $grade = "A";
 }
  elseif($nilai > 80){
    $grade = "B";
  }
  elseif($nilai > 70){
    $grade = "C";
  }
  elseif($nilai > 60){
    $grade = "D";
  }

  if ($nilai >60){
    $hasil = "LULUS";
  }else{
    $hasil = "TIDAK LULUS";
  }
 
 $nilai1 = $normatif;
  if ($nilai1 > 90) {
    $grade1 = "A";
 }
  elseif($nilai1 > 80){
    $grade1 = "B";
  }
  elseif($nilai1 > 70){
    $grade1 = "C";
  }
  elseif($nilai1 > 60){
    $grade1 = "D";
  }

  if ($nilai1 >60){
    $hasil1 = "LULUS";
  }else{
    $hasil1 = "TIDAK LULUS";
  }
 
  $nilai2 = $melok;
  if ($nilai2 > 90) {
    $grade2 = "A";
 }
  elseif($nilai2 > 80){
    $grade2 = "B";
  }
  elseif($nilai2 > 70){
    $grade2 = "C";
  }
  elseif($nilai2 > 60){
    $grade2 = "D";
  }

  if ($nilai2 >60){
    $hasil2 = "LULUS";
  }else{
    $hasil2 = "TIDAK LULUS";
  }

  if ($rata >60){
    $hasilrata = "LULUS";
  }else{
    $hasilrata = "TIDAK LULUS";
  }
 } 
?>

<div class="container">
 <div class="row">
        <h4><?php echo "Nama : $nama"?></h4>
 </div>
 <div class="row">
        <h4><?php echo "Kelas : $kelas"?></h4>
</div>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Mapel</th>
      <th scope="col">Nilai</th>
      <th scope="col">Grade</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Produktif</td>
      <td><?php echo "$produktif" ?></td>
      <td><?php echo "$grade" ?></td>
      <td><?php echo "$hasil" ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Normatif</td>
      <td><?php echo "$normatif" ?></td>
      <td><?php echo "$grade1" ?></td>
      <td><?php echo "$hasil1" ?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Mulok</td>
      <td><?php echo "$melok" ?></td>
      <td><?php echo "$grade2" ?></td>
      <td><?php echo "$hasil2" ?></td>
    </tr>
  </tbody>
</table>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
              <h4>Nilai Rata-Rata</h4>
            </div>
        </div>
        <div class="col-md-4">
                <div class="row">
                <h4><?php echo "$rata"?></h4>
                </div>
            <div class="row">
                <h4><?php echo "$hasilrata"?></4>
            </div>
            </div>
    </div>
  </div>
</div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
  </body>
</html>