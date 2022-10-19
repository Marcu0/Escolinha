<?php

include "../adm/conexao.php";

if(isset($_GET['login'])){

    $login =$_GET['login'];

    $sql="delete from usuario where login='$login'";
    $excluir=mysqli_query($conexao,$sql);
    if($excluir){
        echo "
            <script>
                alert('Usuário excluido com sucesso!');
                window.location='listarUser.php';
            </script>
        ";
    }else{
        echo "
            <p>Sistema temporariamente fora do ar. Tente
            novamente mais tarde.</p>
            <p>Entre em contato com o Admnistrador do
            Sistema.</p>
        
        ";
        echo mysqli_error($conexao);
    }
}
else{
    echo "
            <p>Esta e uma pagina de tratamento de dados</p>
            <p>Clique <a href='listarUser.php'>aqui</a> para excluir um aluno.</p>
        
        ";
 }



?>