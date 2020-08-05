<?php
    //atrelando a conexao do banco de dados por outro arquivo
    require 'con.php';

    //seleciona os usuarios existentes na tabela usuarios no banco de dados
    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);

    //caso haja usuarios essa condição faz a contagem das linhas existentes
    if($sql->rowCount() > 0){

        //percorre o array encontrado e armazena na variavel usuario
        foreach($sql->fetchAll() as $usuario){

            //emprime na tela as informações encontradas
            echo "NOME: ".$usuario['nome']." - ".$usuario['email']."</br>";
        }
    }
    //essa menssagem será mostrada caso a tabela esteja vazia
    else{
        echo "não há usuarios";
    }
?>