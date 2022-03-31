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

    $aqua = new Dispencer();
    echo "Nama Minuman : ".$aqua->namaMinuman = 'Aqua';
    echo '<hr/>';
    echo "Volume Galon adalah ".$aqua->isi(1000) . ' Ml';
    echo '<br/>';
    echo "Andi Beli Air 1 Gelas dengan volume ".$aqua->volumeGelas(250). ' Ml';
    echo '<br/>';
    echo "Hasl volume sekarang adalah ".$aqua->isi(1000) - $aqua->volumeGelas(250). ' Ml';

    


?>