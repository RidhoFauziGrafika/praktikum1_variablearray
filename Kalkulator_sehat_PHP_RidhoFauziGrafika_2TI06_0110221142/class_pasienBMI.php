<?php 

class Pasien {
    public $id,
    $kode,
    $nama,
    $tmp_lahir,
    $tgl_lahir,
    $email,
    $gender;

    public function __construct($no, $nama, $tmp_lahir, $tgl_lahir, $email, $gender){
        $this->id = $no;
        $this->kode = $kode = "P" . sprintf('%03d', $this->id);
        $this->nama = $nama;
        $this->tmp_lahir = $tmp_lahir;
        $this->tgl_lahir = $tgl_lahir;
        $this->email = $email;
        $this->gender = $gender;
    }
}

trait Bmi {
    public $berat,
    $tinggi;

    public function dataNilai(){
        return number_format((float)$this->berat / ($this->tinggi / 100) ** 2, 1, '.', '');
    }

    public function nilaiPasien($keterangan){
        if($keterangan < 18.5) {
            return "Kekurangan berat badan";
        }else if ($keterangan >= 18.5 && $keterangan <= 23.9){
            return  "Normal(Ideal)";
        }else if ($keterangan >= 24 && $keterangan <= 26.9){
            return  "Kelebihan Bobot";
        }else if ($keterangan >= 27 && $keterangan <= 29.9){
            return  "Obesitas 1";
        }else if ($keterangan >= 30){
            return  "Obesitas 2";
        }
    }
} 

class bmiPasien extends Pasien{
    use Bmi; 
    public $id,
    $bmi,
    $tanggal,
    $pasien;

    public function __construct($no, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi_badan, $berat_badan){
        parent:: __construct($no, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi_badan, $berat_badan);
        $this->berat = $berat_badan;
        $this->tinggi = $tinggi_badan;
        $this->bmi = $this->dataNilai();
        $this->tanggal = date("Y-m-d");
    }
}

?>