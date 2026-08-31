<?php

    $host = "localhost";
    $dbname = "usnotes";
    $user = "balio";
    $pass = "kali";

    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // para e execucao e exibe o erro

    } catch(PDOException $e) {

        $error = $e->getMessage();
        echo "Erro: $error";
    }

?>