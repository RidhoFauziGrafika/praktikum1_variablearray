<?php 

    include_once 'header.php';
    include_once 'sidebar.php';

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project UTS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Praktikum 4</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-6">        
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Class Lingkaran</h3>
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

                                            echo "Nilai PHI ".Lingkaran::PHI;
                                            $lingkar1 = new Lingkaran(10);
                                            $lingkar2 = new Lingkaran(4);
                                            echo "<br/>";

                                            echo "<br>Luas Lingkaran I : ".$lingkar1->getLuas();
                                            echo "<br>Luas Lingkaran II : ".$lingkar2->getLuas();
                                            echo "<br/>";

                                            echo "<br>Keliling Lingkaran I : ".$lingkar1->getKeliling();
                                            echo "<br>Keliling Lingkaran II : ".$lingkar2->getKeliling();

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">        
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>Class Persegi Panjang</h3>
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

                                            //membuat obyek
                                            $perpang = new persegiPanjang;  

                                            //menampilkan hasil dari obyek hitung luas dan hitun keliling
                                            echo 'Luas persegi panjang : '.$perpang->hitung_luas(50,20);
                                            echo '<br/>Keliling persegi panjang : '.$perpang->hitung_keliling(50,20);  

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">        
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>Class Manusia</h3>
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
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-6">
                                <form action="" method="POST">
                                        <div class="form-group row">
                                            <label for="nim" class="col-4 col-form-label">NIM</label> 
                                            <div class="col-8">
                                                <input id="nim" name="nim" placeholder="Masukkan Nim anda" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="matkul" class="col-4 col-form-label">Pilih Mata Kuliah</label> 
                                            <div class="col-8">
                                                <select id="matkul" name="matkul" class="custom-select">
                                                    <option value="Dasar-Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                                    <option value="Pemrograman Web">Pemrograman Web</option>
                                                    <option value="Basis Data">Basis Data</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                                            <div class="col-8">
                                                <input id="nilai" name="nilai" placeholder="Masukkan Nilai Anda" type="text" class="form-control">
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <div class="offset-4 col-8">
                                                <button name="submit" type="submit" class="btn btn-success" value="simpan">Simpan</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                            <div class="col-lg-3 col-6">    
                                <div class="small-box bg-success">
                                    <h3>Hasil Nilai</h3>
                                    <?php 
                                        
                                        class Nilaimahasiswa {
                                            public $nim;
                                            public $matkul;
                                            public $nilai;
                                    
                                            function __construct($nim, $matkul, $nilai){
                                                $this->nim = $nim;
                                                $this->matkul = $matkul;
                                                $this->nilai = $nilai;
                                            }
                                    
                                            function hitungNilai(){
                                                return $this->nilai;
                                            }
                                    
                                            function kelulusan($keterangan){
                                                if($keterangan > 55){
                                                    return 'Anda Lulus';
                                                }else {
                                                    return 'Anda tidak lulus';
                                                }
                                            }
                                    
                                            function grade($keterangan){
                                                if ($keterangan >= 85 && $this->nilai <=100){
                                                    return 'A';
                                                }else if ($keterangan >= 70 && $this->nilai <=84){
                                                    return 'B';
                                                }else if ($keterangan >= 56 && $this->nilai <=69){
                                                    return 'C';
                                                }else if ($keterangan >= 36 && $this->nilai <=55){
                                                    return 'D';
                                                }else if ($keterangan >= 0 && $this->nilai <=35){
                                                    return 'E';
                                                }else {
                                                    return 'I';
                                                }
                                            } 
                                    
                                        }

                                        if($_POST){
                                            $ns = new Nilaimahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
                                            $keterangan = $ns->hitungNilai();
                                            $hasil = $ns -> kelulusan($keterangan);
                                            $hasil2 = $ns -> grade($keterangan);
                
                
                                            echo 'NIM : '.$ns->nim;
                                            echo '<br/> Mata kuliah : '.$ns->matkul;
                                            echo '<br/> Nilai : '.$ns->nilai;
                                            echo '<br/> Hasil ujian : '.$ns->kelulusan($keterangan);
                                            echo '<br/> Grade : '.$ns->grade($keterangan);
                                        }
                                            
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-8 col-6">
                                <?php 
                                
                                class Mahasiswa {

                                    var $nim;
                                    var $nama;
                                    var $thn_angkatan;
                                    var $prodi;
                                    var $ipk;
                                
                                    function __construct($nim, $nama){
                                        $this->nim = $nim;
                                        $this->nama = $nama;
                                    }
                                
                                    function predikat_ipk(){
                                        if ($this->ipk < 2.0) return "Cukup";
                                        elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
                                            return "Baik";
                                        elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
                                            return "Memuaskan";
                                        elseif ($this->ipk >= 3.75 && $this->ipk <= 4)
                                            return "Cum Laude";
                                    }
                                }
                            
                                
                                ?>

                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">NIM</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Prodi</th>
                                            <th scope="col">Thn Angkatan</th>
                                            <th scope="col">IPK</th>
                                            <th scope="col">Predikat</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 

                                                $mahasiswa1 = new Mahasiswa($nim, $nama);
                                                $mahasiswa2 = new Mahasiswa($nim, $nama); 
                                                $mahasiswa3 = new Mahasiswa($nim, $nama);
                                                $mahasiswa4 = new Mahasiswa($nim, $nama);
                                                $listMahasiswa = array( 1 => 

                                                array("nim" => $mahasiswa1->$nim = "02011", "nama" => $mahasiswa1->nama = "Faiz Zikri", "prodi" => $mahasiswa1->prodi = "TI", "tahun" => $mahasiswa1->thn_angkatan = 2012, "ipk" => $mahasiswa1->ipk = 3.8, "predikat" => $mahasiswa1->predikat_ipk()),
                                                array("nim" => $mahasiswa2->$nim = "02012", "nama" => $mahasiswa2->nama = "Alissa Khairunnisa", "prodi" => $mahasiswa2->prodi = "TI", "tahun" => $mahasiswa2->thn_angkatan = 2012, "ipk" => $mahasiswa2->ipk = 3.9, "predikat" => $mahasiswa2->predikat_ipk()),
                                                array("nim" => $mahasiswa3->$nim = "01011", "nama" => $mahasiswa3->nama = "Rosalie Naurah", "prodi" => $mahasiswa3->prodi = "SI", "tahun" => $mahasiswa3->thn_angkatan = 2010, "ipk" => $mahasiswa3->ipk = 3.46, "predikat" => $mahasiswa3->predikat_ipk()),
                                                array("nim" => $mahasiswa4->$nim = "01012", "nama" => $mahasiswa4->nama = "Defghi Muhammad", "prodi" => $mahasiswa4->prodi = "SI", "tahun" => $mahasiswa4->thn_angkatan = 2010, "ipk" => $mahasiswa4->ipk = 3.2, "predikat" => $mahasiswa4->predikat_ipk())
                                                );

                                            
                                                foreach ($listMahasiswa as $no => $mahasiswa){
                                                    echo "<tr>";
                                                        echo "<td>" .$no. "</td>";
                                                        echo "<td>" . $mahasiswa["nim"] . "</td>";
                                                        echo "<td>" . $mahasiswa["nama"] . "</td>";
                                                        echo "<td>" . $mahasiswa["prodi"] . "</td>";
                                                        echo "<td>" . $mahasiswa["tahun"] . "</td>";
                                                        echo "<td>" . $mahasiswa["ipk"] . "</td>";
                                                        echo "<td>" . $mahasiswa["predikat"] . "</td>";
                                                        echo "<td> <a href='#'<i class='bi bi-eye-fill'></i></a> <a href='#'><i class='bi bi-pencil-fill'></i></a></td>";
                                                    echo "</tr>";
                                                }
                                            
                                            ?>
                                    </tbody>
                                </table><br>
                                Showing 1 to 4 of 4 entries
                                <ul class="pagination float-end">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div> 
                    </div>
                </div>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php 

    include_once 'footer.php';

?>