<?php
include_once('db_connect.php');

if (empty($_GET['id'])) {
    header("Location: main.php");
} else {
    $id = $_GET['id'];

    try {
        $pdo = db_connect();
        $sql = "DELETE FROM books WHERE id = :id";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':id',$id);
        $stmt->execute();

        header("Location: main.php");
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
}
?>