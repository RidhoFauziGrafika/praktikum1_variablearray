<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="navbar navbar-light bg-light p-3">
        <a class="navbar-brand" href="#">Sistem Penilaian</a>
    </div>
    <div class="navbar mt-5">
        <h2>Form Nilai Siswa</h2>    
    </div>
    <hr>  
    <form action="nilai_siswa.php" method="POST">
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
</body>
</html>


