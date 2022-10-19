<?php


include "../adm/conexao.php";


if (isset($_POST['nome'])) {

    //entrada
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']);
    $materia = trim($_POST['materia']);

    //processamento
    $sql = "insert into professor(nome,email,endereco,telefone,materia) values
    ('$nome','$email','$endereco','$telefone','$materia')";

    $incluir = mysqli_query($conexao, $sql);


    //saida
    if ($incluir) {

        echo "
            <script>

                alert('Professor cadastrado com sucesso!');
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
}else{
    echo "
            <p>Esta e uma pagina de tratamento de dados</p>
            <p>Clique <a href='formProf.php'>aqui</a> para incluir um aluno.</p>
        
        ";
 }

