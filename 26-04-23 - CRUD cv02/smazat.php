<?php
    require('db.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM kava WHERE id=$id";
    if ($sql = $conn->query($sql)) {
        header("Location: index.php?smazano=1");
        exit();
    }
?>