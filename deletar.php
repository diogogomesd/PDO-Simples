<?php
    //puxando conexão
    require 'con.php';

    //para deletar basta colocar no lugar das aspas simples o id desejado
    $sql = "DELETE FROM usuarios WHERE id = ''";
    $sql = $pdo->query($sql);


?>