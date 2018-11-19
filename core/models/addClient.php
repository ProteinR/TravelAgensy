<?php
require_once '../../core/controllers/connect_db.php';
//    var_dump($_POST);
if ($_POST['fio'] != ''){

    $fio = htmlspecialchars(strip_tags($_POST['fio']));
    $passport = htmlspecialchars(strip_tags($_POST['passport']));
    $personal_phone = htmlspecialchars(strip_tags($_POST['personal_phone']));


    $stmt = $pdo->prepare("INSERT INTO clients (fio, passport, phone) 
                                VALUES (:fio, :passport, :personal_phone)");
    $stmt->bindParam(':fio', $fio);
    $stmt->bindParam(':passport', $passport);
    $stmt->bindParam(':personal_phone', $personal_phone);
    $stmt->execute();

    header('location: ../../main/clients');

//    echo "<pre>";
////        var_dump($_POST);
//    echo "</pre>";
//}else {
////        echo "не соблюдено условие";
//    echo "<pre>";
////        var_dump($_POST);
//    echo "</pre>";
}
