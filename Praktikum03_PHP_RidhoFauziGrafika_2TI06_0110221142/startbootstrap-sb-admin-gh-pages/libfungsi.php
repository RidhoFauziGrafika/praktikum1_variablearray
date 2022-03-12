<?php 

function kelulusan($_nilai){
    if ($_nilai > 55){
        return 'Anda Lulus';
    }else {
        return 'Anda tidak lulus';
    }
}

function grade($_nilai){
    if($_nilai >= 85) {
        return "A (Sangat Memuaskan)";
    }else if ($_nilai >= 70){
        return "B (Memuaskan)";
    }else if ($_nilai >= 56){
        return "C (Cukup)";
    }else if ($_nilai >= 36){
        return "D (Kurang)";
    }else if ($_nilai >= 10){
        return "E (Sangat Kurang)";
    }else {
        return 'I Tidak Ada Nilai';
    }
}

?>