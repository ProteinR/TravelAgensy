<?php
require_once 'core/views/header.php';

$query = 'SELECT * FROM employee';

$stmt = $pdo->query($query);

$employee = $stmt->fetchALl(PDO::FETCH_ASSOC);

