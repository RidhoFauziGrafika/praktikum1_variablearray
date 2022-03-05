<?php 

    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mataKuliah = $_POST['mataKuliah'];
    $nilaiUts = $_POST['uts'];
    $nilaiUas = $_POST['uas'];
    $nilaiTugas = $_POST['tugas'];
    $total_nilai = $nilaiUts + $nilaiUas + $nilaiTugas;
    $alphabet = $total_nilai/3;

    if($alphabet <= 55){
        $lulus = "Anda Tidak Lulus";
    }else {
        $lulus = "Selamat Anda Lulus";
    }

    if($alphabet >= 85) {
        $grade = "A (Sangat Memuaskan)";
    }else if ($alphabet >= 70){
        $grade = "B (Memuaskan)";
    }else if ($alphabet >= 56){
        $grade = "C (Cukup)";
    }else if ($alphabet >= 36){
        $grade = "D (Kurang)";
    }else if ($alphabet >= 10){
        $grade = "E (Sangat Kurang)";
    }else {
        $grade = 'I Tidak Ada Nilai';
    }

    echo '<br>Nama : '.$nama_siswa;
    echo '<br>Mata Kuliah : '.$mataKuliah;
    echo '<br>Nilai UTS : '.$nilaiUts;
    echo '<br>Nilai UAS : '.$nilaiUts;
    echo '<br>Nilai Tugas Praktikum : '.$nilaiTugas;
    echo '<br> Grade : '.$grade;
    echo '<br> Keterangan : '.$lulus;
    echo '<br>Data telah di '.$proses;
    
?>