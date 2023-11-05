<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "blog_project";

    try{
        $dbConnect = new PDO("mysql:host=$host; dbname=$dbname;", $user, $pass);
        $dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo("Falha ao conectar o banco de dados: " . $e->getMessage());
    }
?>