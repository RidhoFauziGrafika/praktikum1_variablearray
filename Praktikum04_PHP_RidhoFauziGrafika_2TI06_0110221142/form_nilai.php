<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
    <body>

        <nav class="navbar navbar-expand-md navbar-light bg-light mb-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Web02</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                REVIEW PHP
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PHP5 OOP
                            </a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container">
            <h4>Form Nilai Ujian</h4>
            <hr class="featurette-divider col-8">
            
            <div class="container-fluid">
                <div class="container p-2">
                    <form action="form_nilai.php" method="POST">
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
            </div>
                <?php 

                        require_once 'class_nilaimahasiswa.php';

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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>