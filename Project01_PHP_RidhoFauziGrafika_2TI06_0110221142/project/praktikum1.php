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
                <h3 class="card-title">Praktikum 1</h3>

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
                                        <h3>Fungsi Arsort</h3>      
                                        <?php
                                                
                                            // fungsi arsort yaitu mengurutkan data array sesuai dengan valuenya
                                                $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
                                                echo '<ol>';
                                                    foreach($ar_buah as $k => $v){
                                                        echo '<li>'.$k.' - ' . $v . '</li>';
                                                    }
                                                echo '</ol>';
                                                    
                                                arsort($ar_buah);
                                    
                                                echo '<ol>';
                                                    foreach($ar_buah as $k => $v){
                                                        echo '<li>'.$k. ' - ' . $v .'</li>';
                                                    }
                                                echo '</ol>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>Fungsi Sort</h3>
                                        <?php 
                                        
                                             // fungsi sort yaitu untuk mengurutkan data dari elemen pertama
                                            $ar_buah2 = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
                                            echo '<ol>';
                                                foreach($ar_buah2 as $k => $v){
                                                    echo '<li>'.$k.' - ' . $v . '</li>';
                                                }
                                            echo '</ol>';
                                                
                                            sort($ar_buah2);

                                            echo '<ol>';
                                                foreach($ar_buah2 as $k => $v){
                                                    echo '<li>'.$k. ' - ' . $v .'</li>';
                                                }
                                            echo '</ol>';
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>Array Buah</h3>
                                        <?php 
                                        
                                         // array buah
                                            $ar_buah3 = ["Pepaya", "Mangga", "Pisang", "Jambu"];

                                            // cetak buah index ke 2
                                            echo '<ol>';    
                                                echo $ar_buah3[2];

                                                // cetak jumlah buah 
                                                echo '<br> Jumlah Buah : '. count($ar_buah3);
                                            echo '</ol>';

                                            // cetak seluruh buah
                                            echo '<ol>';
                                                foreach($ar_buah3 as $buah){
                                                    echo '<li>'. $buah .'</li>';
                                                }   
                                            echo '</ol>';

                                            // tambahkan buah 
                                            $ar_buah3[] = "Durian";

                                            // Hapus bauh index ke 1
                                            unset($ar_buah3[1]);

                                            // ubah buah index ke 2 menjadi manggis 
                                            $ar_buah3[2]="Manggis";

                                            // cetak seluruh buah dengan index nya 
                                            echo '<ul>';
                                                foreach($ar_buah3 as $k => $v){
                                                    echo '<li> Buah index - ' .$k .' adalah '.$v .'</li>';
                                                }
                                            echo '<ul>';
                                        
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>Array Pop</h3>
                                        <?php 
                                            // untuk menghapus elemen array dibagian akhir
                                            $tims = ["erwin","heru","ali","zaki"];
                                            array_pop($tims);
                                            foreach($tims as $person){
                                                echo $person. '<br>';
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-6">        
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>Array Push</h3>
                                        <?php 
                                        
                                         // untuk memasukkan elemen array dibagian akhir  

                                        $tims1 = ["erwin","heru","ali","zaki"];
                                        array_push($tims1,"wati");
                                        foreach($tims1 as $person){
                                            echo $person.'<br>';
                                        }

                                        ?>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-lg-3 col-6">        
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>Array Shift</h3>
                                        <?php 
                                                                               
                                            // untuk menghapus elemen array dibagian awal

                                            $tims2 =["erwin","heru","ali","zaki"];
                                            array_shift($tims2);
                                            foreach($tims2 as $person){
                                                echo $person. '<br>';
                                            }

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">        
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>Array Unshift</h3>
                                        <?php 
                                                                               
                                            // untuk menambahkan elemen array dibagian awal

                                            $tims3 =["erwin","heru","ali","zaki"];
                                            array_unshift($tims3,"joko", "wati");
                                            foreach($tims3 as $person){
                                                echo $person. '<br>';
                                            }

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">        
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Konstanta</h3>
                                        <?php 
                                                                               
                                            // Konstanta adalah pengidentifikasi atau nama sederhana yang dapat di berikan nilai tetap apapun.
                                            define('PHI' , 3.14);
                                            define('DBNAME', 'inventori');
                                            define('DBSERVER','localhost');

                                            $jari = 8;
                                            $luas = PHI * $jari * $jari;
                                            $kll = 2 * PHI * $jari;

                                            echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
                                            echo '<br>Kelilingnya : '.$kll;

                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">        
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>Variabel User</h3>
                                        <?php 
                                                                               
                                           // variabel user menampilkan data yang kita buat
                                            $nama = 'Rosalie Naurah';
                                            $umur = 13;
                                            $berat = 22.4;

                                            echo 'Nama : ' . $nama;
                                            echo '<br> Umur : ' . $umur.' Tahun';
                                            echo '<br> Berat : ' . $berat,' Kg';
                                            echo "<br>Hallo $nama Apa kabar";
                                            echo '<hr/>';

                                            echo 'Nama Databasenya : '.DBNAME;
                                            echo '<br>Lokasinya databasenya ada di '.DBSERVER;
                                        ?>
                                    </div>
                                </div>
                            </div>           
                            <div class="col-lg-7 col-6">        
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>Dokumen Root dan Nama File</h3>
                                        <?php 
                                                                               
                                            // menampilkan dokumen root dan nama file.
                                            echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
                                            echo '<br> Nama File '.$_SERVER["PHP_SELF"];

                                        ?>
                                    </div>
                                </div>
                            </div>  
                            <div class="col-lg-6 col-6">        
                                    <div class="inner">
                                        <h3 class="m-auto">Array Siswa</h3>
                                        <?php 
                                                                               
                                            $ns1 = ['id' => 1, 'nim'=>'01101','uts'=> 80, 'uas'=> 84, 'tugas'=> 78];
                                            $ns2 = ['id' => 2, 'nim'=>'01121','uts'=> 70, 'uas'=> 50, 'tugas'=> 68];
                                            $ns3 = ['id' => 3, 'nim'=>'01130','uts'=> 60, 'uas'=> 86, 'tugas'=> 70];
                                            $ns4 = ['id' => 4, 'nim'=>'01134','uts'=> 90, 'uas'=> 91, 'tugas'=> 82];                       
                                            $ar_nilai = [$ns1,$ns2,$ns3,$ns4];

                                        ?>
                                        <table class="table table-dark table-striped w-100">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIM</th>
                                                    <th>UTS</th>
                                                    <th>UAS</th>
                                                    <th>Tugas</th>
                                                    <th>Nilai Akhir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    
                                                    $nomor = 1;
                                                    foreach($ar_nilai as $ns){
                                                            echo '<tr><td>'.$nomor.'</td>';
                                                            echo '<td>'.$ns['nim'].'</td>';
                                                            echo '<td>'.$ns['uts'].'</td>';
                                                            echo '<td>'.$ns['uas'].'</td>';
                                                            echo '<td>'.$ns['tugas'].'</td>';
                                                            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                                                            echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                                                            echo '</tr>';
                                                            $nomor++;
                                                    }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
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