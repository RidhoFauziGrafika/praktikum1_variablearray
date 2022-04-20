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
                <h3 class="card-title">Praktikum 2</h3>

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
                    <div class="navbar mt-5">
                        <h4>Form Belanja</h2>    
                    </div><hr/>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-5 col-lg-5 order-md-last float-right">
                                <h4 class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-primary">Daftar Harga</span>
                                </h4>
                                <ul class="list-group mb-3">
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">TV</h6>
                                        </div>
                                        <span class="text-muted">Rp. 4.200.000</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">Kulkas</h6>
                                        </div>
                                        <span class="text-muted">Rp. 3.100.000</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between lh-sm">
                                        <div>
                                            <h6 class="my-0">Mesin Cuci</h6>
                                        </div>
                                        <span class="text-muted">Rp. 3.800.000</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span class="text-primary">Harga Dapat Berubah Setiap Saat</span>
                                    </li>
                                </ul>
                            </div>
                            <form action="" method="POST" class ="w-50 p-5 float-left">
                                <div class="form-group row">
                                    <label for="customer" class="col-4 col-form-label">Customer</label> 
                                    <div class="col-8">
                                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Pilih Produk</label> 
                                    <div class="col-8">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
                                            <label for="produk_0" class="custom-control-label">TV</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas"> 
                                            <label for="produk_1" class="custom-control-label">Kulkas</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
                                            <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                                    <div class="col-8">
                                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                                    </div>
                                </div> 
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" value="Simpan" class="btn btn-primary">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div> 
                        <?php 

                                $nama_customer = $_POST['customer'];
                                $pilihan_produk = $_POST['produk'];
                                $jumlah_produk = $_POST['jumlah'];

                                if($pilihan_produk == "TV"){
                                    $total_belanja = $jumlah_produk * 4200000;
                                }else if ($pilihan_produk == "Kulkas"){
                                    $total_belanja = $jumlah_produk * 3100000;
                                }else if ($pilihan_produk == "Mesin Cuci"){
                                    $total_belanja = $jumlah_produk * 3800000;
                                }else {
                                    $total_belanja = 0;
                                }
                        ?>
                        <div class="col-md-5 col-lg-4 order-md-last">
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                    <h6 class="my-0">Nama Pelanggan</h6>
                                    </div>
                                    <span class="text-muted"><?= $nama_customer; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                    <h6 class="my-0">Pilihan Produk</h6>
                                    </div>
                                    <span class="text-muted"><?= $pilihan_produk; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                    <h6 class="my-0">Jumlah Produk</h6>
                                    </div>
                                    <span class="text-muted"><?= $jumlah_produk; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                    <h6 class="my-0">Total Belanja</h6>
                                    </div>
                                    <span class="text-muted"><?php echo 'Rp . ' .$total_belanja; ?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar mt-5">
                            <h4>Form Nilai Siswa</h2>    
                        </div><hr/>
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
                                    <button name="proses" type="submit" value="Simpan" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                    
                    ?>
                    <div class="col-md-5 col-lg-4 order-md-last">
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                    <h6 class="my-0">Nama</h6>
                                    </div>
                                    <span class="text-muted"><?= $nama_siswa; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                    <h6 class="my-0">Mata Kuliah</h6>
                                    </div>
                                    <span class="text-muted"><?= $mataKuliah; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                    <h6 class="my-0">Nilai UTS</h6>
                                    </div>
                                    <span class="text-muted"><?= $nilaiUts; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Nilai UAS</h6>
                                    </div>
                                    <span class="text-muted"><?= $nilaiUas; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Nilai Tugas</h6>
                                    </div>
                                    <span class="text-muted"><?= $nilaiTugas; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                    <h6 class="my-0">Grade</h6>
                                    </div>
                                    <span class="text-muted"><?= $grade; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Keterangan</h6>
                                    </div>
                                    <span class="text-muted"><?= $lulus; ?></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-sm">
                                    <div>
                                        <h6 class="my-0">Data Telah Di</h6>
                                    </div>
                                    <span class="text-muted"><?= $proses; ?></span>
                                </li>
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