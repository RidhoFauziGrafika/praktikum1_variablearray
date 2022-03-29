<?php 

    class Dispencer{
        protected $volume;
        protected $hargaSegelas;
        private $volumeGelas;
        public $namaMinuman;

        public function isi($v){
           return  $this->volume = $v;
        }

        public function hargaSegelas($h){
            return $this->harga = $g;
        }

        public function volumeGelas($g){
           return  $this->gelas = $g;
        }
       
    }

    $fanta = new Dispencer();
    echo "Nama Minuman : ".$fanta->namaMinuman = 'Fanta';
    echo '<hr/>';
    echo "Volume Botol Minuman ".$fanta->isi(1000) . ' Ml';
    echo '<br/>';
    echo "Andi Beli Air 1 Gelas dengan volume ".$fanta->volumeGelas(250). ' Ml';
    echo '<br/>';
    echo "Hasl volume sekarang adalah ".$fanta->isi(1000) - $fanta->volumeGelas(250). ' Ml';

    


?>