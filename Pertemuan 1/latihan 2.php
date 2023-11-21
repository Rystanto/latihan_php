<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">

    <title>Latihan 2</title>
  </head>
  <body>

    <b><h1>Toko Wayang Kami</h1></b>
    <h6>Program Aplikasi Sederhana Untuk Menghitung Penjualan Barang Toko Wayang Kami</h6>
    <br>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="form-group">
        <label for="namaBarang">Nama Barang</label>
        <input type="text" class="form-control" id="namaBarang" name="nama" placeholder="">
    </div>
    <div class="form-group">
        <label for="hargaBarang">Harga Barang</label>
        <input type="text" class="form-control" id="hargaBarang" name="harga" placeholder="">
    </div>
    <div class="form-group">
        <label for="jumlahBarang">Jumlah Barang</label>
        <select class="form-control" id="jumlahBarang" name="jumlah">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jumlahBarang">Diskon</label>
        <select class="form-control" id="jumlahDiskon" name="diskon">
            <option>0</option>
            <option>10</option>
            <option>20</option>
            <option>30</option>
            <option>40</option>
            <option>50</option>
        </select>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="hitung">Hitung</button>
    <h1><hr></h1>
</form>

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

<?php
if(isset($_POST['hitung'])){
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $diskon = $_POST['diskon'];
    $total = $harga * $jumlah;
    $hdiskon = $total * ($diskon/100); 
    $bayar = $total-$hdiskon ;

    echo "<h3>Jumlah yang harus dibayar</h3>";
    echo "<h6>Nama Barang: $nama </h6>";
    echo "<h6>Harga Barang: $harga </h6>";
    echo "<h6>Jumlah Barang: $jumlah </h6>";
    echo "<h6>Diskon: $diskon%</h6>";
    echo "<h3>Rp ". number_format ($bayar,2)."</h3>";

}
?>