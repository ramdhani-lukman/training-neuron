<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Posisi text</title>
</head>
<body>
    <?php
        $string     = "Anda beruntung memenangkan pertandingan ini";
        $searchKeyword = "beruntung";
        $hasil  = strpos($string,$searchKeyword);
        $hasilAkhir = $hasil+1;
        echo $searchKeyword.' berada di posisi '.$hasil;
    ?>
</body>
</html>