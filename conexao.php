<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=controle-financeiro", "root", "");
    }catch(PDOException $erro){
        echo $erro->getMessage();
    }
?>