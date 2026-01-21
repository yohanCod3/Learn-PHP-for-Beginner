<?php
  $mahasiswa = [
  ["Yohanes", 25301616, "Informatika", "Email"],
  ["Prasdya", 25301717, "Informatika", "Email2"],
  ["Ilham", 25301818, "Informatika", "Email3"]
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array 3</title>
</head>
<body>
  <h1>Daftar mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
      <li>Nama  : <?= $mhs[0]; ?></li>
      <li>NIM   : <?= $mhs[1]; ?></li>
      <li>Prodi :<?= $mhs[2]; ?></li>
      <li>Email :<?= $mhs[3]; ?></li>
    </ul>
  <?php endforeach ?>
</body>
</html>