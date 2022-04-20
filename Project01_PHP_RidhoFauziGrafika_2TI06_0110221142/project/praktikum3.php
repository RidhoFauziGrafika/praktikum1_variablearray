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
                <h3 class="card-title">Praktikum 3</h3>

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
                                <div class="container-fluid">
        
                                    <?php 

                                        require_once 'atas.php';

                                    ?>

                                    <h1>Welcome Home !!!</h1>

                                    <?php 

                                        require_once 'bawah.php';

                                    ?>
                                </div><hr/>
                            </div>
                        </div>
                </div>
                <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="container-fluid">
                                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                                        <div class="navbar navbar-light bg-light p-3">
                                            <a class="navbar-brand" href="#">Sistem Penilaian</a>
                                        </div>
                                        <div class="navbar mt-5">
                                            <h2>Form Nilai Siswa</h2>    
                                        </div>
                                        <hr>  
                                        <form action="" method="POST">
                                            <div class="container">
                                                <div class="form-group row">
                                                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                                                    <div class="col-8">
                                                        <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control" require>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="mataKuliah" class="col-4 col-form-label">Mata Kuliah</label> 
                                                    <div class="col-8">
                                                        <select id="mataKuliah" name="mataKuliah" class="custom-select">
                                                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                                                            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                                                            <option value="Basis Data">Basis Data</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                                                    <div class="col-8">
                                                        <input id="uts" name="uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
                                                    <div class="col-8">
                                                        <input id="uas" name="uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                                                    <div class="col-8">
                                                        <input id="tugas" name="tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control">
                                                    </div>
                                                </div> 
                                                <div class="form-group row">
                                                    <div class="offset-4 col-8">
                                                        <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <footer class="footer bg-light">
                                            <div class="p-4">
                                            <a class="text-dark" href="https://mdbootstrap.com/">Develop By </a>
                                                @rojulman ©2017
                                            </div>
                                        </footer>
                                    <?php 

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
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="container-fluid">
                                            <div class="container-fluid">
                                                <?php
                                                    require_once 'atasadmin.php';
                                                ?>

                                                <?php
                                                    require_once 'bawahadmin.php';
                                                ?>
                                            </div>   
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
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