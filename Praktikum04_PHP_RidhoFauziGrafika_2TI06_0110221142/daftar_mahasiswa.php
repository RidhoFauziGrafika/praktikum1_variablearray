<?php 

require_once 'class_mahasiswa.php';

$mahasiswa1 = new mahasiswa($nim,$nama);
$mahasiswa2 = new mahasiswa($nim,$nama); 
$mahasiswa3 = new mahasiswa($nim,$nama);
$mahasiswa4 = new mahasiswa($nim,$nama);
$listMahasiswa = [ 1 => 

["nim" => $mahasiswa1->$nim = "02011", "nama" => $mahasiswa1->nama = "Faiz Zikri", "prodi" => $mahasiswa1->prodi = "TI", "tahun" => $mahasiswa1->thn_angkatan = 2012, "ipk" => $mahasiswa1->ipk = 3.8, "predikat" => $mahasiswa1->predikat_ipk()],
["nim" => $mahasiswa2->$nim = "02012", "nama" => $mahasiswa2->nama = "Alissa Khairunnisa", "prodi" => $mahasiswa2->prodi = "TI", "tahun" => $mahasiswa2->thn_angkatan = 2012, "ipk" => $mahasiswa2->ipk = 3.9, "predikat" => $mahasiswa2->predikat_ipk()],
["nim" => $mahasiswa3->$nim = "01011", "nama" => $mahasiswa3->nama = "Rosalie Naurah", "prodi" => $mahasiswa3->prodi = "SI", "tahun" => $mahasiswa3->thn_angkatan = 2010, "ipk" => $mahasiswa3->ipk = 3.46, "predikat" => $mahasiswa3->predikat_ipk()],
["nim" => $mahasiswa4->$nim = "01012", "nama" => $mahasiswa4->nama = "Defghi Muhammad", "prodi" => $mahasiswa4->prodi = "SI", "tahun" => $mahasiswa4->thn_angkatan = 2010, "ipk" => $mahasiswa4->ipk = 3.2, "predikat" => $mahasiswa4->predikat_ipk()]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
                        <li class="nav-item">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>
                    <div class="navbar-nav">
                        <a href="#" class="nav-link">Login</a>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button">
                            Dropdown
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            Show 
            <select name="list" id="list">
                <option value="angka">10</option>
            </select> entries
            <div class="float-lg-end">
                Search: 
                <input type="text">
            </div>
            <table class="table table-striped table-hover m-auto">
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>