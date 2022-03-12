<?php 

    require_once 'libfungsi.php';

    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mataKuliah = $_POST['mataKuliah'];
    $nilaiUts = $_POST['uts'];
    $nilaiUas = $_POST['uas'];
    $nilaiTugas = $_POST['tugas'];
    $total_nilai = $nilaiUts + $nilaiUas + $nilaiTugas;
    $_nilai = $total_nilai/3;
    $hasil_ujian = kelulusan($_nilai);
    // menampilkan grade dengan fungsi if else
    $peringkat = grade($_nilai);

    echo '<br>Nama : '.$nama_siswa;
    echo '<br>Mata Kuliah : '.$mataKuliah;
    echo '<br>Nilai UTS : '.$nilaiUts;
    echo '<br>Nilai UAS : '.$nilaiUts;
    echo '<br>Nilai Tugas Praktikum : '.$nilaiTugas;
    echo '<br> Grade : '.$peringkat;
    echo '<br> Keterangan : '.$hasil_ujian;
    echo '<br>Data telah di '.$proses;
    
?>