<?php
include "../adm/conexao.php";

if(isset($_GET['idProf'])){

    $idProf =$_GET['idProf'];

    $sql="delete from professor where idPro=$idProf";
    $excluir=mysqli_query($conexao,$sql);
    if($excluir){
        echo "
            <script>
                alert('Professor demitido com sucesso!');
                window.location='listarProf.php';
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
            <p>Clique <a href='listarProf.php'>aqui</a> para excluir um aluno.</p>
        
        ";
 }



?>
