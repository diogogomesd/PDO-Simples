<?php
    //puxando a conexao do banco de dados
    require 'con.php';

    //variaveis que armazenam o conteudo a ser inserido no banco de dados
    //bastando preencher as aspas
    //tambem pode receber os dados de uma tabela html
    $nome = "";
    $email = "";
    $senha = md5("");

    //iserindo
    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $sql = $pdo->query($sql);

    //retorno da execução da query
    echo "Usuário inserido com sucesso ".$pdo->lastInsertId();

?>