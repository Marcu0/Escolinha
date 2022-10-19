<?php

include "../adm/conexao.php";


if (isset($_POST['login'])) {

    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);


    $sql = "update usuario set senha='$senha' where login='$login'";
    $alterar = mysqli_query($conexao, $sql);


    if ($alterar) {
        echo "
            <script>
                alert('Senha atualizada com sucesso!');
                window.location = 'listarUser.php';
            </script>
        ";
    } else {

        echo "
            <p>Sistema temporariamente fora do ar. Tente
            novamente mais tarde.</p>
            <p>Entre em contato com o Admnistrador do
            Sistema.</p>
        
        ";
        echo mysqli_error($conexao);
    }
} else {

    echo "
    <p>Esta e uma pagina de tratamento de dados</p>
    <p>Clique <a href='listarUser.php'>aqui</a> para cadastrar um usuário.</p>

";
}
