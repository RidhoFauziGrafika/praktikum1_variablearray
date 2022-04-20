<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien BMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <h3 class="text-center">Daftar Pasien BMI</h3>
    <div class="container">
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

                    require_once 'class_pasienBMI.php';

                    $daftarPasien = array(
                        1 =>
                        array(1, '2022-01-30', 'P001', 'Ahmad', 'L', 69.8, 169, 24.7, 'Kelebihan Berat Badan', 'Depok'),
                        array(2, '2022-01-10', 'P002', 'Rina', 'P', 55.3, 165, 20.3, 'Normal (Ideal)', 'Jakarta'),
                        array(3, '2022-01-11', 'P003', 'Lutfi', 'L', 45.2, 171, 15.4, 'Kekurangan Berat Badan', 'Bogor')
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>