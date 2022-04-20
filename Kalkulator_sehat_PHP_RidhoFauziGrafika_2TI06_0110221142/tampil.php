<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="card login-form">
            <div class="card-body">
                <h1 class="card-title text-center">H A L A M A N - B M I</h1>
            </div>
            <div class="card-text">
                <form action="datapasien.php" method="POST">
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
        </div>
    </div>
</body>
</html>