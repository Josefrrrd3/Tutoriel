<?php
$hostnom = 'host=localhost';
$usernom = 'root';
$password = '';
$bdd = 'biblio';

try {
    $monPdo = new PDO("mysql:$hostnom;dbname=$dbb;charset=utf8", $usernom,$password);
    $monPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    echo $e->getMessage();
    $monPdo = null;
}
?>