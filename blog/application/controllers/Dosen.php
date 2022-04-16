<?php 

    // method Dosen
    class Dosen extends CI_Controller{
        public function index(){
            //load atau memanggil model dosen
            $this->load->model('dosen_model','dsn1');

            //buat object model 1 dan nilai
            $this->dsn1->nidn='011';
            $this->dsn1->pendidikan='S1';

             //load atau memanggil model dosen
             $this->load->model('dosen_model','dsn2');

             //buat object model 2 dan nilai
             $this->dsn2->nidn='022';
             $this->dsn2->pendidikan='S2';

              //load atau memanggil model dosen
            $this->load->model('dosen_model','dsn3');

            //buat object model 3 dan nilai
            $this->dsn3->nidn='033';
            $this->dsn3->pendidikan='S3';

            // simpan object yang kita buat tadi ke dalam array
            $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

            //simpan data untuk dikirim kedalam view, dimana datanya di ambil dari object yang kita simpan ke dalam array
            $data['list_dsn'] = $list_dsn;

            // selanjutnya tinggal kita render data ke dalam view
            $this->load->view('dosen/index', $data);
        }
    }

?>