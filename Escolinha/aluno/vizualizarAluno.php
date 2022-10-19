<?php
$erro = 0;
include "../adm/controle.php";
include "../adm/conexao.php";

if (isset($_GET['idAluno'])) {
    $idAluno = $_GET['idAluno'];

    $sql = "select * from alunos where id=$idAluno";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);

    $nome = $exibe['nome'];
    $endereco = $exibe['endereco'];
    $telefone = $exibe['telefone'];
    $email = $exibe['email'];
    $turma = $exibe['turma'];
} else {

    $erro++;
}

?>
<div class="container pag">
    <div class="text-end">
        <a href="listarAluno.php">
            <button class="btn btn-success btn-sm">
                Listar Aluno
            </button>
        </a>
    </div>
    <h2>Aluno</h2>
    <hr>
    <div class="container text-start bg-gradient p-3">
        <?php

        if (!$erro) {

            echo "
                
                <p>ID: $idAluno</p>
                 <p>Nome: $nome</p>
                 <p>Endereço: $endereco</p>
                 <p>Telefone: $telefone</p>
                 <p>E-mail: $email</p>
                 <p>Turma: $turma</p>
                
                ";
        } else {

            echo "
                <p>Nenhum aluno foi selecinado</p>
                <p>Clique em listar aluno para selecionar um aluno</p>
                ";
        }


        ?>
    </div>
    <div class="row">
        <div class="col text-start">
            <a href="listarAluno.php">
                <button class="btn btn-danger btn-sm">
                    Voltar
                </button>
            </a>
        </div>
        <div class="col text-end">
            <a href="editarAluno.php?idAluno=<?php echo $idAluno ?>">
                <button class="btn btn-success btn-sm">
                    Editar Aluno
                </button>
            </a>
        </div>
    </div>
</div>
<?php
    include "../adm/footer.php";
?>