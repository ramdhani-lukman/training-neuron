<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Format String dan Integer</title>
</head>
<body>
    <?php
        $jumlah     = 1000000;
        $string     = "Hello world";

        function rupiah($jumlah){
            return number_format($jumlah,0,'.','.');
        }

        echo rupiah($jumlah);
        echo '<br>---------------------------------------<br>';
        echo strtoupper($string);
        echo '<br>---------------------------------------<br>';
        echo strtolower($string);
        echo '<br>---------------------------------------<br>';
        echo substr($string,1,4);
        

    ?>
</body>
</html>