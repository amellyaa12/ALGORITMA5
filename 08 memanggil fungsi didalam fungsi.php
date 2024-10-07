<?php
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Kita berusia ". hitungUmur(2007, 2024) ." tahun<br/>";
  echo "Senang berkenalan dengan Teman-teman semua<br/>";
}
// memanggil fungsi perkenalan
perkenalan("Amellya");

echo "<p><strong>By Amellya</strong>";

?>