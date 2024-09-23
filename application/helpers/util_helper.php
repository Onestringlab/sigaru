<?php
function formatTanggal($tanggal){
    $formatTanggal = date("d M Y", strtotime($tanggal));
    return $formatTanggal;
}

function formatWaktu($waktu){
    $formatWaktu = date("H:i", strtotime($waktu));
    return $formatWaktu;
}

function tampilHari($indexHari){
 $hari = array("Minggu","Senin", "Selasa", "Rabu","Kamis","Jum'at","Sabtu");
 echo $hari[$indexHari];
}

function tampilJam($jam){
  echo substr($jam, 0, 5);
}

function tampilTanggal($tanggal){
  $d = new DateTime($tanggal);
  echo $d->format('d M Y');
}

function tampilJam2($tanggal){
    $d = new DateTime($tanggal);
    echo $d->format('H:i');
}

function ambilTanggal(){
    $d = new DateTime();
    echo $d->format('d M Y');
}
function ambilHariTanggal(){
    $d = new DateTime();
//    echo ($d->format('w'));
    tampilHari($d->format('w'));
    echo ", ".$d->format('d M Y');
}

function phoneFormat($number) {
  if(ctype_digit($number) && strlen($number) >= 10) {
    $number = substr($number, 0, 4) .'-'. substr($number, 4, 4) .'-'. substr($number, 8, 6);
  } else {
    if(ctype_digit($number) && strlen($number) == 7) {
      $number = substr($number, 0, 3) .'-'. substr($number, 3, 4);
    }
  }
  return $number;
}

?>
