<?php

// Buatlah sebuah class

class Manusia{
    // buatlah sebuah property

    var $nama;
    var $warna;


    // lalu buatlah sebuah method manusia 

    function tampilkan_nama(){
        return "Nama saya Ridho Fauzi";
    }

    function warna_kulit(){
        return "<br/> Kulit saya Putih";
    }
}

    // buat lah sebuah object dari class manusia 
    $manusia = new Manusia();

    // menampilkan sebuah method tampilkan nama dan warna kulit
    echo $manusia -> tampilkan_nama();
    echo $manusia -> warna_kulit();

?>