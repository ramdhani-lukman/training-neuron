<?php
// set cookie
$expiredTime = time() +  60 * 60 * 24 * 30; // 1 bulan
setcookie("last_login",date('Y-m-d H:i:s'),$expiredTime);
// read

// destory
setcookie("last_login","",time());
sleep(2);
?>

<?php
$dsn    = "mysql:localhost;dbname=test;port=3306";
$pdo    = new PDO($dsn,'root','');
$stm    = $pdo->prepare("INSERT INTO `person`(`fullname`, `dob`, `sex`) VALUES (?,?,?)");
try {
    $exc    = $stm->execute(['waw',date('Y-m-d'),'M']);
    echo "OK";
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}
