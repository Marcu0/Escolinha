<?php
include "../adm/conexao.php";
include "../adm/controle.php";

$erro = 0;
if (isset($_GET['idProf'])) {
    $idProf = $_GET['idProf'];

    $sql = "select * from professor where idPro=$idProf";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);


    $nome = $exibe['nome'];
    $endereco = $exibe['endereco'];
    $telefone = $exibe['telefone'];
    $email = $exibe['email'];
    $materia = $exibe['materia'];
} else {

    $erro++;
}
?>

<div class="container bg-info pag">
    <h1>Editar dados de Professores</h1>
    <hr>
    <?php

    if ($erro) {

        echo "
            <p>Nenhum professor foi selecinado</p>
            <p>Clique em voltar para selecionar o professor que deseja editar</p>
            ";
    } else {


    ?>
        <form name="form" action="updateProf.php" method="post">
            <input type="hidden" class="form-control" name="idProf" value="<?php echo $idProf; ?>">
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
                <label class="form-label">Matéria</label>
                <input type="text" class="form-control" name="materia" value="<?php echo $materia; ?>" require>
            </div>
        <?php
    }
        ?>
        <div class="row">
            <div class="col text-start">
                <a href="listarProf.php">
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
<?
include "../adm/footer.php";
?>