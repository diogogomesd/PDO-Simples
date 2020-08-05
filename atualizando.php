<?php
    //puxando a conexão
    require 'con.php';

    //comando para update
    //lembrado que esse dados podem ser recebido por meio de uma tabela html
    $sql = "UPDATE usuarios SET email = 'emaildesejado' WHERE email = 'emailatual'";
    $sql = $pdo->query($sql);

    //se essa menssagem for exibida na tela tudo ok
    echo "usuario inserido com sucesso";

?>