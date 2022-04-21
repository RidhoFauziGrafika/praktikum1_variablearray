<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <h3 class="container-fluid text-center">Daftar Mata Kuliah</h3>
    <table class="table table-dark table-striped w-50 container-fluid text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>sks</th>
                <th>kode</th>
            </tr>
        </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    foreach($list_mk as $mk){
                ?>
                <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $mk->nama  ?></td>
                    <td><?php echo $mk->sks ?></td>
                    <td><?php echo $mk->kode ?></td>
                </tr>
                <?php 
                    $nomor++;
                }
                ?>
            </tbody>
    </table>
    
</body>
</html>