<?php

$nama = "Nadila Aprilla"; 
$kelas ="XI-RPL-1";
$nilai_harian = 95 * 30 / 100;
$nilai_uts = 80 * 30 / 100;
$nilai_uas = 85* 40 / 100;
$nilai_akhir = $nilai_harian + $nilai_uts + $nilai_uas;
$garis = "================================";


echo "Nama lengkap = $nama <br>";
echo "Kelas = $kelas <br>";
echo "$garis <br>";
echo  "Nilai harian = $nilai_harian <br>";
echo  "Nilai uts = $nilai_uts <br>";
echo  "Nilai uas = $nilai_uas <br>";
echo  "Nilai akhir = $nilai_akhir <br>";

if($nilai_akhir >= 85 AND $nilai_akhir <= 100){
    echo"predikat kamu A <br/>";
}elseif($nilai_akhir >= 75 AND $nilai_akhir <= 84){
    echo"predikat kamu B <br/>";
}elseif($nilai_akhir >= 60 AND $nilai_akhir <= 74){
    echo"predikat kamu C <br/>";
}elseif($nilai_akhir >= 50 AND $nilai_akhir <= 59){
    echo"predikat kamu D <br/>";
}elseif($nilai_akhir >= 0 AND $nilai_akhir <= 49){
    echo"predikat kamu E <br/>";
}else{
    echo"kamu tidak lulus <br/>";
}

?>