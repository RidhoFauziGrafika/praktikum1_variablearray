<?php 

class Matakuliah extends CI_Controller{
    public function index(){
        //load atau memanggil model mata kuliah
        $this->load->model('matakuliah_model','mk1');

        //buat object model 1 dan nilai
        $this->mk1->nama='Pemrograman Web 2';
        $this->mk1->sks=3;
        $this->mk1->kode='Pw2';
        
        //load atau memanggil model mata kuliah
        $this->load->model('matakuliah_model','mk2');

        //buat object model 2 dan nilai
        $this->mk2->nama='Basis Data';
        $this->mk2->sks=4;
        $this->mk2->kode='Basdat';

        //load atau memanggil model mata kuliah
        $this->load->model('matakuliah_model','mk3');

        //buat object model 3 dan nilai
        $this->mk3->nama='Jaringan Komputer';
        $this->mk3->sks=2;
        $this->mk3->kode='Jarkom';

        // simpan object yang kita buat tadi ke dalam array
        $list_mk = [$this->mk1, $this->mk2, $this->mk3];

        //simpan data untuk dikirim kedalam view, dimana datanya di ambil dari object yang kita simpan ke dalam array
        $data['list_mk'] = $list_mk;

        $this->load->view('layout/header');
        // selanjutnya tinggal kita render data ke dalam view
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layout/footer');
    }
}

?>