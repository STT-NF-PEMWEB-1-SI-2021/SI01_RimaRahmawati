 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Form Belanja</title>
    <style>
      h1{
        margin-top: 2em;
        margin-left: 2em;
      }
      form{
        margin-left: 5em;
        margin-right: 5em;
      }
      fieldset{
        background-color: aquamarine; width: 30%;
      }
      h2{
        margin-left: 1em;
      }
      p{
        margin-left: 2em;
      }
    </style>
  </head>
  <body>

    <h1>Belanja Online</h1>
    <hr><br>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <form method="POST" action="">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Customer</label> 
        <div class="col-8">
          <input id="text" name="nama" placeholder="Nama Customer" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Produk Pilihan</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
            <label for="radio_0" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
            <label for="radio_1" class="custom-control-label">KULKAS</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
            <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
          <input id="text1" name="jumlah" type="text" class="form-control" placeholder="Jumlah">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <input name="kirim" type="submit" value="proses" class="btn btn-success"/>
        </div>
      </div>
    </form>
    <hr>

<?php

$nama = $_POST['nama'];
$produk = $_POST['radio'];
$Jumlah = $_POST['jumlah'];

if($produk == 'TV'){
    $harga =4200000;
}elseif($produk == 'KULKAS'){
    $harga = 3100000;
}elseif($produk == 'MESIN CUCI'){
    $harga = 3800000;
}
$Total = $Jumlah*$harga;

echo 'Nama Customer : '.$nama;
echo '<br/> Produk Pilihan : '.$produk;
echo '<br/> Jumlah Beli : '.$Jumlah;
echo '<br/> Total Beli : '.$Total;

?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
