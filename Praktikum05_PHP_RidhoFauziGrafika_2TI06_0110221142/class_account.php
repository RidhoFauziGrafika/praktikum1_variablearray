<?php 

    class Account {
        public $nomor;
        protected $saldo;

        function __construct($no,$saldo){
            $this->nomor = $no;
            $this->saldo = $saldo;
        }

        public function deposit($uang){
            $this->saldo = $this->saldo + $uang;
        }

        public function witdraw($uang){
            $this->saldo = $this->saldo - $uang;
        }

        public function cetak(){
            echo 'Nomor Account : '.$this->nomor;
            echo '<br/> Saldo : '.$this->saldo;
        }
    }


    class accountBank extends Account{
            public $nama;
        
        public function __construct($no,$saldoAwal,$nam){
            parent::__construct($no,$saldoAwal);
            $this->nama = $nam;
        }

        function cetak(){
            parent::cetak();
            echo 'Nama Pemilik : '.$this->nama;
        }

        public function transfer($tujuan,$uang){
            $tujuan->deposit($uang);
            $this->witdraw($uang);
        }

        public function account(){
           return $this->nomor;
        }

        public function saldo(){
            return $this->saldo;
        }

    }

?>