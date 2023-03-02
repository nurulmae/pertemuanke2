<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 at-4">
        
<form method="GET" action="kaluaran.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Mata kuliah</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="mata" id="mata_0" type="radio" class="custom-control-input" value="D"> 
        <label for="mata_0" class="custom-control-label">ddp</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="mata" id="mata_1" type="radio" class="custom-control-input" value="M"> 
        <label for="mata_1" class="custom-control-label">mtk</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="mata" id="mata_2" type="radio" class="custom-control-input" value="P"> 
        <label for="mata_2" class="custom-control-label">pkn</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php

      $nama = $_GET["nama"];
      $matkul = $_GET["mata"];
      $nilaiuts = $_GET["uts"];
      $nilaiuas = $_GET["uas"];
      $tugas = $_GET["tugas"];
      
      if ($uas + $uts + $tugas >200){
        $status = "lulus";
      }else{
        $status = "tidak lulus";
      }

     echo "nama: ".$nama;
      echo "mata: ".$matkul;
      echo "uts: ".$nilaiuts;
      echo "uas: ".$nilaiuas;
      echo "tugas: ".$tugas;
     echo "status: " .$status;
      

      ?>


		</div>
	</div>
</div>
</body>
</html>