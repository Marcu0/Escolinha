<?php


include "../adm/conexao.php";


if (isset($_POST['login'])) {

    //entrada
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $nivel = "usu";
    $foto = '../fotos/nopic.png';

    //processamento
    $sql = "insert into usuario(login,senha,nome,email,nivel,foto) values
    ('$login','$senha','$nome','$email','$nivel','$foto')";

    $incluir = mysqli_query($conexao, $sql);


    //saida
    if ($incluir) {

        echo "
            <script>

                alert('Usuário cadastrado com sucesso!');
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
}else{
    echo "
            <p>Esta e uma pagina de tratamento de dados</p>
            <p>Clique <a href='formUser.php'>aqui</a> para cadastrar um usuário.</p>
        
        ";
 }

