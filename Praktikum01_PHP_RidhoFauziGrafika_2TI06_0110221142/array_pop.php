<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pop</title>
</head>
<body>

    <?php 
    
    // untuk menghapus elemen array dibagian akhir

        $tims = ["erwin","heru","ali","zaki"];
        array_pop($tims);
        foreach($tims as $person){
            echo $person. '<br>';
        }
    
    ?>
    
</body>
</html>