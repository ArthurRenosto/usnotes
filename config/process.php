<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $notes = [];
    
    $query = "SELECT * FROM notes";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $notes = $stmt->fetchAll();
?>