<?php
include 'config.php';
    try {
        $dns = "mysql:host=".SERVER.";dbname=".BD;
        $pdo = new PDO($dns, USER, PASSWORD);
        echo "<script>alert('Conexión establecida')</script>";
    }catch (PDOException $e){
        echo $e->getMessage();
    }
?>