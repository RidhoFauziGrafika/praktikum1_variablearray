<?php 

    require_once 'class_account.php';

    $ahmad = new accountBank("C001",6000000,"Ahmad");
    $budi = new accountBank("C002", 5350000,"Budi");
    $kurniawan = new accountBank("C003", 2500000, "Kurniawan");
    $total = array(1 => $ahmad, $budi, $kurniawan);

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container text-center">
        <h2>Bank ini</h2>
    </div>
    <div class="container">
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
        </table><br/>
        <div class="container text-left">
            <p>Ahmad Nabung 1.000.000</p>
            <p>Budi tarik uang 2.500.000</p>
        </div>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>