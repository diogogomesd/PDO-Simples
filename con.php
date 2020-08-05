<?php
    /*difinindo a conexão ao banco
    - o conteudo dentro da string 
    - mysql é o tipo de banco de dados
    - dbname = seubd é o nome do banco de dados
    - host = localhost é a maquina ou ip onde está o seubd */

    $con = "mysql:dbname=seubd;host=localhost";
    //usuario do banco de dados
    $user = "nome_usuario do bd";
    //senha do banco de dados
    $pass = "senha do bd";

    //função chamada para conexão
    try{
        $pdo = new PDO($con, $user, $pass);
    }
    //função chamada se der erro na conexão ao banco de dados
    catch(PDOExeception $e){
        echo "ERRO: ".$e->getMessage();
    }



?>