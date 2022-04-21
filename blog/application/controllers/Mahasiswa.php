<?php 

    class Mahasiswa extends CI_Controller{
        public function index(){
            //load atau memanggil model mahasiswa
            $this->load->model('mahasiswa_model','mhs1');

            //buat object model 1 dan nilai 
            $this->mhs1->id= 1;
            $this->mhs1->nim='01001';
            $this->mhs1->nama='Faiz Zikri';
            $this->mhs1->gender='L';
            $this->mhs1->ipk=3.85;

            // load atau memanggil model mahasiswa 
            $this->load->model('mahasiswa_model','mhs2');

            // buat object model 2 dan nilai
            $this->mhs2->id= 2;
            $this->mhs2->nim='01222';
            $this->mhs2->nama='Dinda';
            $this->mhs2->gender='P';
            $this->mhs2->ipk=3.55;

            // simpan object yang kita buat tadi ke dalam array
            $list_mhs = [$this->mhs1, $this->mhs2];

            //simpan data untuk dikirim kedalam view, dimana datanya di ambil dari object yang kita simpan ke dalam array
            $data['list_mhs'] = $list_mhs;


            $this->load->view('layout/header');
            // selanjutnya tinggal kita render data ke dalam view
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('layout/footer');
        }
    }

?>