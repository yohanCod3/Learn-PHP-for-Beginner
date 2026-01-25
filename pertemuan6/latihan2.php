<?php
  // Array Numerik
  $mahasiswa = [
    ["Yohanes", "25301616", "email@gmail.com", "Informatika"],
    ["Prasdya", "25301717", "email2@gmail.com", "RPL"]];

  // Array Associative
  // Key nya adalah string yang dibuat sendiri
  $mahasiswaAss = [
    [
    "nama" => "Yohanes Prasdya",
    "nim" => "25301616",
    "email" => "email3@gmail.com",
    "jurusan" => "Informatika",
    "gambar" => "mahasiswa1.jpg"
    ],

    [
    "nama" => "Ilham Kurniadi",
    "nim" => "25302020",
    "email" => "email4@gmail.com",
    "jurusan" => "Sistem Komputer",
    "tugas" => [90, 80, 75], // Array 3D
    "gambar" => "mahasiswa2.jpg"
    ]
  ];

  // echo $mahasiswaAss[0]["nim"];
  // echo $mahasiswaAss[1]["jurusan"];
  // echo $mahasiswaAss[1]["tugas"][2];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <style>
    .gambar{
      width: 100px;
      height: 130px;
    }
  </style>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>

  <?php foreach ($mahasiswaAss as $mhs) : ?>
    <ul>
      <li>
        <img class="gambar" src="img/<?= $mhs["gambar"]; ?>">
      </li>
      <li>Nama : <?= $mhs["nama"]; ?></li>
      <li>NIM : <?= $mhs["nim"]; ?></li>
      <li>Email : <?= $mhs["email"]; ?></li>
      <li>Prodi : <?= $mhs["jurusan"]; ?></li>
    </ul>
  <?php endforeach ?>
</body>
</html>