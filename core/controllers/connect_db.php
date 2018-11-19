<?php

//$opt = array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
//    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC);

try {
    $pdo = new PDO('pgsql:host=localhost;dbname=TravelAgency', 'postgres', '12345678');
//    echo 'connected';
}catch (PDOException $e) {
    echo "Невозможно установить соедение";
    //echo $e->getMessage();
}