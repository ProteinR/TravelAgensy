<?php
require_once 'core/views/header.php';

$query = 'SELECT id, fio, passport, phone FROM clients';

$stmt = $pdo->query($query);

$clients = $stmt->fetchALl(PDO::FETCH_ASSOC);

