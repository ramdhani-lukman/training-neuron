<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $string     = "Terimakasih saudara, selamat anda sudah menyelsaikan training ini";
    $keyword    = "selamat";
    
    if(preg_match("/$keyword/i",$string)){
        echo "Kata : $keyword ketemu";
    }else{
        echo "$keyword Not found";
    }
?>
</body>
</html>