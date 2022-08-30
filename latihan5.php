<?php

function pengulanganKe20($no_buku){
    for($no_buku; $no_buku <= 6; $no_buku++){
        echo "Buku tersedia ke  $no_buku <br>";
    }
    for($no_buku; $no_buku <= 10; $no_buku++){
        echo "Buku tidak tersedia ke $no_buku <br>";
    }
}
pengulanganKe20(1,6,7,10)

?>