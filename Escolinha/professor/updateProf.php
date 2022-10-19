<?php

include "../adm/conexao.php";


if (isset($_POST['idProf'])) {

    $idProf = trim($_POST['idProf']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']);
    $materia = trim($_POST['materia']);

    $sql = "update professor set nome= '$nome', email='$email',
    endereco='$endereco', telefone='$telefone', materia='$materia' where idPro=$idProf ";
    $alterar = mysqli_query($conexao, $sql);


    if ($alterar) {
        echo "
            <script>
                alert('Professor atualizado com sucesso!');
                window.location = 'listarProf.php';
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
    <p>Clique <a href='listarProf.php'>aqui</a> para incluir um professor.</p>

";
}
