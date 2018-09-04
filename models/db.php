<?php
try {
$strConnection = 'mysql:host=localhost;dbname=id7012987_cogip'; //Ligne 1
$arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
$pdo = new PDO($strConnection, 'id7012987_cogip', 'lolilol', $arrExtraParam); // Instancie la connexion
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Ligne 4
}
catch(PDOException $e) {
$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
die($msg);
}

?>
