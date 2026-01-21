<?php
  // echo "Website PHP pertama";
  /*
    komentar
    baris lebih dari 2
  */

  // PHP Dasar - Sintaks PHP

    // Output
    // 1. Standar Output
    // 2. echo, print
    // 3. print_r
    // 4. var_dump
    // echo "Yohanes Prasdya ";
    // echo 123;
    // echo true;

    // Penulisan sintaks PHP
    // 1. PHP dalam HTML
    // 2. HTML dalam PHP

    // Variabel dan Tipe Data
    // 1. Tidak boleh diawali angka
    $nama = "Prasdya";
    echo " Nama saya $nama ";

    // Operator
    // 1. Aritmatika + - * / %
    $x = 10;
    $y = 20;
    echo $x + $y;

    // Penggabung string / concatenation / concat
    $nama_depan = "Yohanes";
    $nama_belakang = "Prasdya ";
    echo " " . $nama_depan . " " . $nama_belakang;

    // Assignment
    // =, +=, -=, /=, %=, .=
    $x = 5;
    $x -= 2;
    echo $x;
    // $name = " Windah";
    // $name .= " ";
    // $name .= "Basudara";
    // echo $name;

    // Perbandingan
    // <, >, <=, >=, ==, !=
    var_dump(1==1);

    // Identitas
    // ===, !==
    var_dump(1 === "1");

    // Logika
    // &&, ||, !
    $x = 30;
    var_dump($x < 20 || $x %2 == 0);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
  </head>
  <body>
    <h1>Halo Dunia saya <?php echo "$nama"; ?></h1>
  </body>
</html>