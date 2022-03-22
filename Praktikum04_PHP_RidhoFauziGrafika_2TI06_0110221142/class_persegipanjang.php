<?php 

    //membuat class
    class persegiPanjang{  
        
    function hitung_luas($panjang,$lebar)  
    {  
        $luas=$panjang*$lebar;  
        return $luas;  
    }
    
    function hitung_keliling($panjang,$lebar){
        $keliling = 2 * ($panjang + $lebar);
        return $keliling;
    }
}  

?>