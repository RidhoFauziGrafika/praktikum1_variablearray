<?php 

    class Dispencer{
        protected $volume;
        protected $hargaSegelas;
        private $volumeGelas;
        public $namaMinuman;

        public function isi($volume){
           return $this->volume = $volume;
        }

        public function hargaSegelas($hargaSegelas){
            return $this->harga = $hargaSegelas;
        }

        public function volumeGelas($volumeGelas){
           return $this->gelas = $volumeGelas;
        }
    }

    $aqua = new Dispencer();
    echo "Nama Minuman : ".$aqua ->namaMinuman = 'Aqua';
    echo '<hr/>';
    echo "Volume Botol Minuman ".$aqua ->isi(1000)." Ml";
    echo '<br/>';
    echo "Harga segelas nya adalah Rp.".$aqua->hargaSegelas(3000);
    echo '<br/>';
    echo 'Andi membeli air satu gelas yang volumenya '.$aqua->volumeGelas(250).' Ml';
    echo '<br/>';
    echo 'Hasil Volume Sekarang adalah '.$aqua->isi(1000) - $aqua->volumeGelas(250).' Ml';


?>