<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Unshift</title>
</head>
<body>

    <?php 

    // untuk menambahkan elemen array dibagian awal

        $tims =["erwin","heru","ali","zaki"];
        array_unshift($tims,"joko", "wati");
        foreach($tims as $person){
            echo $person. '<br>';
        }

    ?>
    
</body>
</html>