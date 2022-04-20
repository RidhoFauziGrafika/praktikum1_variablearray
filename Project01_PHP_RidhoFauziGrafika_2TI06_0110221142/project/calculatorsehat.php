<?php 

    include_once 'header.php';
    include_once 'sidebar.php';

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <h3 class="card-title">Kalkulator Sehat</h3>

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
                            <form action="" method="POST" class="container">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir">
                                </div>
                                <div class="mb-3">
                                    <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" placeholder="Masukkan Tempat Lahir">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="form-group row d-flex mb-3">
                                    <label class="col-12">Jenis Kelamin</label> 
                                    <div class="col-12 d-flex">
                                        <div class="custom-control custom-radio custom-control-inline col-6">
                                            <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L"> 
                                            <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline col-6">
                                            <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P"> 
                                            <label for="jk_1" class="custom-control-label">Perempuan</label>
                                        </div>
                                    </div>
                                </div> 
                                <div class="mb-3">
                                    <label for="berat" class="form-label">Berat Badan</label>
                                    <input type="number" class="form-control" id="berat" name="berat" placeholder="Masukkan Berat Anda">
                                </div>
                                <div class="mb-3">
                                    <label for="tinggi" class="form-label">Tinggi Badan</label>
                                    <input type="number" class="form-control" id="tinggi" name="tinggi" placeholder="Masukkan Tinggi Anda">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
                                </div>
                            </form>
                        </div>
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
                        <div class="container p-2">
                            <table class="table table-dark table-striped m-auto">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Kode Pasien</th>
                                        <th>Nama Pasien</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Berat</th>
                                        <th>Tinggi</th>
                                        <th>Nilai BMI</th>
                                        <th>Status BMI</th>
                                        <th>Tempat Lahir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 

                                        $daftarPasien = array(
                                            1 =>
                                            array(1, '2022-01-30', 'P001', 'Ahmad', 'L', 69.8, 169, 24.7, 'Kelebihan Berat Badan', 'Bekasi'),
                                            array(2, '2022-01-10', 'P002', 'Rina', 'P', 55.3, 165, 20.3, 'Normal (Ideal)', 'Tanggerang'),
                                            array(3, '2022-01-11', 'P003', 'Lutfi', 'L', 45.2, 171, 15.4, 'Kekurangan Berat Badan', 'Depok')
                                        );

                                            $nama = $_POST['nama'];
                                            $tgl_lahir = $_POST['tanggalLahir'];
                                            $tmp_lahir = $_POST['tempatLahir'];
                                            $email = $_POST['email'];
                                            $gender = $_POST['jk'];
                                            $berat = $_POST['berat'];
                                            $tinggi = $_POST['tinggi'];
                                            $pasienBaru = new BMIPasien(count($daftarPasien) + 1, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat);
                                            $pasienBaru->bmi = $pasienBaru->dataNilai();
                                            array_push($daftarPasien, array($pasienBaru->id, $pasienBaru->tanggal, $pasienBaru->kode, $pasienBaru->nama, $pasienBaru->gender, $pasienBaru->berat, $pasienBaru->tinggi, $pasienBaru->bmi, $pasienBaru->nilaiPasien($pasienBaru->bmi), $pasienBaru->tmp_lahir));
                                    ?>
                                    <?php 
                                    
                                        foreach($daftarPasien as $dp){
                                            echo '<tr>';
                                                echo '<td>' .$dp[0]. '</td>';
                                                echo '<td>' .$dp[1]. '</td>';
                                                echo '<td>' .$dp[2]. '</td>';
                                                echo '<td>' .$dp[3]. '</td>';
                                                echo '<td>' .$dp[4]. '</td>';
                                                echo '<td>' .$dp[5]. '</td>';
                                                echo '<td>' .$dp[6]. '</td>';
                                                echo '<td>' .$dp[7]. '</td>';
                                                echo '<td>' .$dp[8]. '</td>';
                                                echo '<td>' .$dp[9]. '</td>';
                                            echo '</tr>';
                                        }

                                    ?>
                                </tbody>
                            </table>
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