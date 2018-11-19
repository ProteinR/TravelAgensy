<?php
require_once 'core/views/header.php';

$query = 'SELECT * FROM tours';

$tours = $pdo->query($query);

$results = $tours->fetchALl(PDO::FETCH_ASSOC);


//var_dump($result);