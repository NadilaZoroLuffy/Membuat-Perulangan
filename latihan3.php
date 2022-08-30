<?php
$no_buku = 8;
for($no_buku =1; $no_buku <= 10; $no_buku++ ){
    if($no_buku <= 7){
        echo "buku no - $no_buku tersedia <br/>";
    }else if($no_buku == 8){
        echo "buku  no - $no_buku sedang dipinjam <br/>";
    }else{
        echo "buku  no - $no_buku tidak tersedia <br/>";
    }
}

$nilai = 10;
if($nilai < 30){
    echo"bener <br/>";
}elseif($nilai == 30){
    echo"nilainya 30 <br/>";
}else{
    echo"salah <br/>";
}

$nilai_1 = 100;
if($nilai_1 >= 90 AND $nilai_1<= 100){
    echo"Peredikat kamu A <br/>";
}else{
    echo"Pereddikat kamu bukan A <br/>";
}



?>