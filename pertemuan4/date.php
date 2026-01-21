<?php
  // Date
  // echo date("l, d-M-Y H:i:");

  // Time
  // echo time();

  // echo date("d M Y", time()-60*60*24*365*10);

  // mktime (membuat detik sendiri)
  // mktime(0,0,0,0,0,0)
  // jam, menit, detik, bulan, tanggal. tahun
  // echo date("l", mktime(0,0,0,3,23,2007));

  // strtotime
  echo date("l", strtotime("23 mar 2007"));
?>