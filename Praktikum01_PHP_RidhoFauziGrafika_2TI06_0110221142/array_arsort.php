<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Sort</title>
</head>
<body>

    <?php

    // fungsi arsort yaitu mengurutkan data array sesuai dengan valuenya

        $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
        echo '<ol>';
            foreach($ar_buah as $k => $v){
                echo '<li>'.$k.' - ' . $v . '</li>';
            }
        echo '</ol>';
        
        arsort($ar_buah);
        echo '<hr>';

        echo '<ol>';
            foreach($ar_buah as $k => $v){
                echo '<li>'.$k. ' - ' . $v .'</li>';
            }
        echo '</ol>';
    ?>

    
</body>
</html>