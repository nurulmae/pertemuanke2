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
		    <div class="col-md-12 at-4">
      <?php

      $titel = $_GET["title"];
      $Tahun = $_GET["tahun"];
      $Gebre = $_GET["genre"];
      $Rating = $_GET["rating"];
      echo "judul game: ".$titel;
      echo " <br/>TAhun game: ".$Tahun;
      echo " <br/>genre game: ".$Gebre;
      echo " <br/>rating game: ".$Rating;


      ?>
    

</div>
	</div>
</div>
</body>
</html>