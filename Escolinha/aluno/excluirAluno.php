<?php

include "../adm/conexao.php";

if(isset($_GET['idAluno'])){

    $idAluno =$_GET['idAluno'];

    $sql="delete from alunos where id=$idAluno";
    $excluir=mysqli_query($conexao,$sql);
    if($excluir){
        echo "
            <script>
                alert('Aluno excluido com sucesso!');
                window.location='listarAluno.php';
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
            <p>Clique <a href='listarAluno.php'>aqui</a> para excluir um aluno.</p>
        
        ";
 }



?>