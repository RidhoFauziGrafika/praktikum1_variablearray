<?php 

    class buah{
        public $nama;
        public $warna;
        
        public function __construct($nama, $warna){
            $this->nama = $nama;
            $this->warna= $warna;
        }

        public function intro(){
            echo "Nama Aku adalah {$this->nama} dan warna aku adalah {$this->warna}";
        }
    }

    class strawberry extends buah {
        public function message(){
            echo "Aku adalah sebuah strawberry atau pisang?";
        }
    }

    $buah = new strawberry("Strawberry", "merah");
    $buah->message();
    echo "<br/>";
    $buah->intro();
    

?>