<?php 

    class Nilaimahasiswa {
        public $nim;
        public $matkul;
        public $nilai;

        function __construct($nim, $matkul, $nilai){
            $this->nim = $nim;
            $this->matkul = $matkul;
            $this->nilai = $nilai;
        }

        function hitungNilai(){
            return $this->nilai;
        }

        function kelulusan($keterangan){
            if($keterangan > 55){
                return 'Anda Lulus';
            }else {
                return 'Anda tidak lulus';
            }
        }

        function grade($keterangan){
            if ($keterangan >= 85 && $this->nilai <=100){
                return 'A';
            }else if ($keterangan >= 70 && $this->nilai <=84){
                return 'B';
            }else if ($keterangan >= 56 && $this->nilai <=69){
                return 'C';
            }else if ($keterangan >= 36 && $this->nilai <=55){
                return 'D';
            }else if ($keterangan >= 0 && $this->nilai <=35){
                return 'E';
            }else {
                return 'I';
            }
        } 

    }

?>