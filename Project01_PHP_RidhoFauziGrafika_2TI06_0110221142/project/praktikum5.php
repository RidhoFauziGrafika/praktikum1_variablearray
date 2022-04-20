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
                <h3 class="card-title">Praktikum 5</h3>

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
                                        <h3>Class Buah</h3>
                                        <?php 

                                            class Fruit {
                                                public $name;
                                                protected $color;
                                                private $weight;

                                                // membuat method 
                                                public function set_color($c){
                                                    return $this->color=$c;
                                                }

                                                public function set_weight($b){
                                                    return $this->weight=$b;
                                                }
                                            }

                                            $mango = new Fruit();
                                            echo $mango -> name = 'mango'; // ok
                                            echo "<br/>";
                                            echo $mango -> set_color('hijau'); // error
                                            echo "<br/>";
                                            echo $mango -> set_weight ('300'); // error
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">        
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>Class Fruit</h3>
                                        <?php 

                                            class buah{
                                                public $nama;
                                                public $warna;
                                                
                                                public function __construct($nama, $warna){
                                                    $this->nama = $nama;
                                                    $this->warna= $warna;
                                                }

                                                public function intro(){
                                                    echo "Nama Aku adalah {$this->nama} dan warna aku adalah {$this->warna}";
                                                }
                                            }

                                            class strawberry extends buah {
                                                public function message(){
                                                    echo "Aku adalah sebuah strawberry atau pisang?";
                                                }
                                            }

                                            $buah = new strawberry("Strawberry", "merah");
                                            $buah->message();
                                            echo "<br/>";
                                            $buah->intro();
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">        
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>Class Dispencer</h3>
                                        <?php 

                                            class Dispencer{
                                                protected $volume;
                                                protected $hargaSegelas;
                                                private $volumeGelas = 0;
                                                public $namaMinuman;

                                                public function isi($volume){
                                                return $this->volume = $volume;
                                                }

                                                public function hargaSegelas($hargaSegelas){
                                                    return $this->harga = $hargaSegelas;
                                                }

                                                public function volumeGelas($volumeGelas){
                                                return $this->gelas = $volumeGelas;
                                                }
                                            }

                                            $aqua = new Dispencer();
                                            echo "Nama Minuman : ".$aqua ->namaMinuman = 'Aqua';
                                            echo '<hr/>';
                                            echo "Volume Botol Minuman ".$aqua ->isi(1000)." Ml";
                                            echo '<br/>';
                                            echo "Harga segelas nya adalah Rp.".$aqua->hargaSegelas(3000);
                                            echo '<br/>';
                                            echo 'Andi membeli air satu gelas yang volumenya '.$aqua->volumeGelas(250).' Ml';
                                            echo '<br/>';
                                            echo 'Hasil Volume Sekarang adalah '.$aqua->isi(1000) - $aqua->volumeGelas(250).' Ml';
                                        ?>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-6">
                                <h3>Class Data Account</h3>
                                <?php 

                                    class Account {
                                        public $nomor;
                                        protected $saldo;

                                        function __construct($no,$saldo){
                                            $this->nomor = $no;
                                            $this->saldo = $saldo;
                                        }

                                        public function deposit($uang){
                                            $this->saldo = $this->saldo + $uang;
                                        }

                                        public function witdraw($uang){
                                            $this->saldo = $this->saldo - $uang;
                                        }

                                        public function cetak(){
                                            echo 'Nomor Account : '.$this->nomor;
                                            echo '<br/> Saldo : '.$this->saldo;
                                        }
                                    }


                                    class accountBank extends Account{
                                            public $nama;
                                        
                                        public function __construct($no,$saldoAwal,$nam){
                                            parent::__construct($no,$saldoAwal);
                                            $this->nama = $nam;
                                        }

                                        function cetak(){
                                            parent::cetak();
                                            echo 'Nama Pemilik : '.$this->nama;
                                        }

                                        public function transfer($tujuan,$uang){
                                            $tujuan->deposit($uang);
                                            $this->witdraw($uang);
                                        }

                                        public function account(){
                                        return $this->nomor;
                                        }

                                        public function saldo(){
                                            return $this->saldo;
                                        }

                                    }

                                    $ahmad = new accountBank("C001",6000000,"Ahmad");
                                    $budi = new accountBank("C002", 5350000,"Budi");
                                    $kurniawan = new accountBank("C003", 2500000, "Kurniawan");
                                    $total = array(1 => $ahmad, $budi, $kurniawan);

                                ?>
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table-light">
                                            <th scope="col">No</th>
                                            <th scope="col">No. Account</th>
                                            <th scope="col">Nama Pemilik</th>
                                            <th scope="col">Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            foreach ($total as $no => $nilai){
                                                echo "<tr>";
                                                    echo "<td>" .$no. "</td>";
                                                    echo "<td>" . $nilai->account() . "</td>";
                                                    echo "<td>" . $nilai->nama . "</td>";
                                                    echo "<td>" . $nilai->saldo() . "</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <p>Ahmad Nabung 1.000.000 </br> Budi tarik uang 2.500.000</p>
                                <table class="table table-striped">
                                    <thead>
                                        <tr class="table-light">
                                            <th scope="col">No</th>
                                            <th scope="col">No. Account</th>
                                            <th scope="col">Nama Pemilik</th>
                                            <th scope="col">Saldo</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $ahmad->deposit(1000000);
                                        $budi->witdraw(2500000);
                                        $total = array(1 => $ahmad,$budi);
                                        foreach ($total as $no => $nilai) {
                                            echo "<tr>";
                                                echo "<td>" . $no . "</td>";
                                                echo "<td>" . $nilai-> account() . "</td>";
                                                echo "<td>" . $nilai->nama . "</td>";
                                                echo "<td>" . $nilai->saldo() . "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </table>
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