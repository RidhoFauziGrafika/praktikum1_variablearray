<?php 

require_once 'class_persegipanjang.php';

//membuat obyek
$perpang = new persegiPanjang;  

//menampilkan hasil dari obyek hitung luas dan hitun keliling
echo 'Luas persegi panjang : '.$perpang->hitung_luas(50,20);
echo '<br/>Keliling persegi panjang : '.$perpang->hitung_keliling(50,20);  

?>