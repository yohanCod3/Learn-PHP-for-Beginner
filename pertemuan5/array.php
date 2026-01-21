<?php
  // array
  // variabel dengan banyak nilai

  // cara lama
  $hari = array("Senin", "Selasa", "Rabu");
  
  // cara baru
  $bulan = ["Januari", "Februari", "Maret"];
  $array1 = [123, "Yohanes", true];
  
  // menampilkan array
  var_dump($hari);
  echo "<br>";
  print_r($bulan);
  echo "<br>";
  
  // menampilkan satu elemen pada array
  echo $array1[0];
  echo "<br>";
  echo $bulan[1];
  echo "<br>";
  echo "<br>";
  
  // menambahkan elemen baru pada array
  var_dump($hari);
  $hari[] = "Kamis";
  $hari[] = "Jumat";
  echo "<br>";
  var_dump($hari);
?>