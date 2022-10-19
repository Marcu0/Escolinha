<?php

include "../adm/conexao.php";


if (isset($_POST['login'])) {

    $login = trim($_POST['login']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);


    $sql = "update usuario set nome='$nome',email='$email' where login='$login'";
    $alterar = mysqli_query($conexao, $sql);


    if ($alterar) {
        echo "
            <script>
                alert('Usuário atualizado com sucesso!');
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
