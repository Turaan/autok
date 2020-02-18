<?php

$id = $_GET['id'];

$config = getConfig($configPath);

$pdo = getConection( $config["database"] );
if  ( isset( $_POST['producer'])) {
    saveCar ( $pdo,$id,$_POST['producer'],$_POST['type'],$_POST['vintage'],$_POST['fuel']);
}
$car = getCar( $pdo, $id );
?>