<?php

include "../adm/conexao.php";


if (isset($_POST['idAluno'])) {

    $idAluno = trim($_POST['idAluno']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']);
    $turma = trim($_POST['turma']);

    $sql = "update alunos set nome= '$nome', email='$email',
    endereco='$endereco', telefone='$telefone', turma='$turma' where id=$idAluno ";
    $alterar = mysqli_query($conexao, $sql);


    if ($alterar) {
        echo "
            <script>
                alert('Aluno atualizado com sucesso!');
                window.location = 'listarAluno.php';
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
    <p>Clique <a href='listarAluno.php'>aqui</a> para incluir um aluno.</p>

";
}
