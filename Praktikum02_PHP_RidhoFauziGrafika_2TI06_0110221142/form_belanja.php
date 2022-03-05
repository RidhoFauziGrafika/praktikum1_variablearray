<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-1 h1">Belanja Online</span>
    </nav>
        <div class="col-md-5 col-lg-4 order-md-last float-right">
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
        <form action="form_belanja.php" method="POST" class ="w-50 p-5 float-left">
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
        
        <div class="container p-5 float-left">  
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
        </div>
</body>
</html>
      





