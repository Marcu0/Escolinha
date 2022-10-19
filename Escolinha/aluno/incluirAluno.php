<?php


include "../adm/conexao.php";


if (isset($_POST['nome'])) {

    //entrada
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']);
    $turma = trim($_POST['turma']);

    //processamento
    $sql = "insert into alunos(nome,email,endereco,telefone,turma) values
    ('$nome','$email','$endereco','$telefone','$turma')";

    $incluir = mysqli_query($conexao, $sql);


    //saida
    if ($incluir) {

        echo "
            <script>

                alert('Usuário cadastrado com sucesso!');
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
}else{
    echo "
            <p>Esta e uma pagina de tratamento de dados</p>
            <p>Clique <a href='formAluno.php'>aqui</a> para incluir um aluno.</p>
        
        ";
 }

