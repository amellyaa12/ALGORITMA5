<?php
// mmbuat fungsi
function perkenalan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang berkenalan dengan Teman-teman semua<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Amellya", "Hi");

  echo "<hr>";

  $saya = "Amellya";
  $ucapanSalam = "Selamat pagi";
  // memanggilnya lagi
  perkenalan($saya, $ucapanSalam);

  echo "<p><strong>By Amellya</strong>";

?>