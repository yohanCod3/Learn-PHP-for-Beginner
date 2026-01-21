<?php
  // Perulangan pada array
  // for / foreach
  $angka = [1,2,3,4,5,6,7];
  $angka[] = 8;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .kotak{
      width: 50px;
      height: 50px;
      background-color: salmon;
      text-align: center;
      line-height: 50px;
      margin: 4px;
      float: left;
    } 
    .clear {clear: both;}
  </style>
  <title>Array 2</title>
</head>
<body>
  <?php for($i = 0; $i < count($angka); $i++) : ?>
    <div class="kotak"><?= $angka[$i]?></div>
  <?php endfor ?>

  <div class="clear"></div>
  
  <?php foreach($angka as $a) : ?>
  <div class="kotak"><?= $a; ?></div>
  <?php endforeach ?>

  <div class="clear"></div>
</body>
</html>