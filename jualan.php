<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method ="POST"action = "jualan.php">
  <div class="form-group row">
    <label for="costum" class="col-4 col-form-label">costumer</label> 
    <div class="col-8">
      <input id="costum" name="costum" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="Televisi"> 
        <label for="produk_0" class="custom-control-label">Tv</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="produk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin"> 
        <label for="produk_2" class="custom-control-label">Mesin cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
    $costumer = $_POST["costum"];
    $pilihproduk = $_POST["produk"];

    if($pilihproduk == "Televisi"){
        $harga = 2000; 

    }elseif($pilihproduk == "Kulkas"){
        $harga = 3000;
    }else{ $harga = 4000;

    }
    $jumlah = $_POST["jumlah"];
    $total = $harga * $jumlah;
    
    echo "costum: ".$costumer;
      echo "<br/>produk: ".$pilihproduk;
      echo "<br/>jumlah: ".$jumlah;
      echo "<br/>total: ".$total;
      
    
?>
		</div>
	</div>
</div>
</body>
</html>