<?php
$file   = $_FILES['file'];
$type   = mime_content_type($file['tmp_name']);
$size   = $file['size'];
$fileName = md5(date('Y-m-d H:i:s').$file['name']).$file['name'];

if($size > 500000){
    die('File terlalu besar');
}else{
    if(in_array($type,['image/jpg','image/png','image/jpeg'])){
        move_uploaded_file($file['tmp_name'],'./uploads/'.$fileName);
        die('OK');
    }else{
        die('File harus gambar');
    }
}

echo '<pre>'; print_r($file) ;echo '</pre>';die();