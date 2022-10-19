<?php
include "../adm/controle.php";
include "../adm/conexao.php";
$erro = 0;
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
    <div class="container bg-info pag">
        <h1>Editar dados de Alunos</h1>
        <hr>
        <?php 
        
        if ($erro){

            echo "
            <p>Nenhum aluno foi selecinado</p>
            <p>Clique em voltar para selecionar o aluno que deseja editar</p>
            ";

        } else {

    
        ?>
        <form name="form" action="updateAluno.php" method="post">
            <input type="hidden" class="form-control" name="idAluno" value="<?php echo $idAluno; ?>">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="nome@exemplo.com" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" value="<?php echo $endereco; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<?php echo $telefone; ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Turma</label>
                <input type="text" class="form-control" name="turma" maxlength="4" value="<?php echo $turma; ?>" require>
            </div>
            <?php 
                }
            ?>
            <div class="row">
                <div class="col text-start">
                    <a href="listarAluno.php">
                        <button type="button" class="btn btn-danger btn-sm">
                            Voltar
                        </button>
                    </a>
                </div>
                <div class="col text-end">
                    <button class="btn btn-success btn-sm" type="submit">
                        Alterar dados
                    </button>

                </div>
            </div>
        </form>
    </div>
<?php
 include "../adm/footer.php";
?>