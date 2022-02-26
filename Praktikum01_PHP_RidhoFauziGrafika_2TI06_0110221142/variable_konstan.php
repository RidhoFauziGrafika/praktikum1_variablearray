<?php 
// Konstanta adalah pengidentifikasi atau nama sederhana yang dapat di berikan nilai tetap apapun.
define('PHI' , 3.14);
define('DBNAME', 'inventori');
define('DBSERVER','localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
echo '<br>Kelilingnya : '.$kll;
?>
<hr>

<?php

echo 'Nama Databasenya : '.DBNAME;
echo '<br>Lokasinya databasenya ada di '.DBSERVER;

?>