<?php 

// membuat sebuah class
class Lingkaran {

    // membuat sebuah property 
    private $jari;
    const PHI = 3.14;

    // method
    function __construct ($r){
        $this->jari = $r;
    }

    // membuat method getluas untuk menghitung luas lingkaran  
    function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }

    // membuat method getkeliling untuk menghitung keliling lingkaran
    function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
}

?>