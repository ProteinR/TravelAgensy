<?
//require_once 'core/controllers/connect_db.php';
require_once 'core/views/header.php';

//    var_dump($_POST);
if ($_GET['id'] != '') {

    $stmt = $pdo->prepare("SELECT * FROM clients 
                                WHERE id = :id");
    $stmt->bindParam(':id', $_GET['id']);

    $stmt->execute();

    $editClient = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($editClient);

//    require_once 'core/views/editClient.php';

}
?>