<?php
  // Data Array
  $handphone = [
    [
      "nama" => "Techno Camon 40 5G",
      "prosesor" => "Mediatek Dimensity 7300", 
      "layar" => '6.78" AMOLED 144 Hz',
      "kamera" => "50 MP AF", 
      "gambar" => "techno.jpg", 
    ],
    [
      "nama" => "Samsung Galaxy A26",
      "prosesor" => "Exynos 1380", 
      "layar" => '6.78" AMOLED 144 Hz',
      "kamera" => "50 MP", 
      "gambar" => "samsung.jpg", 
    ]
  ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handphone Idaman</title>
  <style>
    .gambar{
      width: 200px;
      height: 200px;
    }
  </style>
</head>
<body>
  <h2>Handphone Impian Yohanes</h2>
  <?php foreach($handphone as $hp): ?>
    <ul>
      <li><img src="img/<?= $hp["gambar"] ?>" class="gambar"></li>
      <li>Handphone : <?= $hp["nama"] ?></li>
      <li>Prosesor : <?= $hp["prosesor"] ?></li>
      <li>Layar : <?= $hp["layar"] ?></li>
      <li>Kamera : <?= $hp["kamera"] ?></li>
    </ul>
  <?php endforeach ?> 
</body>
</html>