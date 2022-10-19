<?php
include "../adm/controle.php";
include "../adm/conexao.php";
$erro = 0;
if (isset($_GET['login'])) {
    $login = $_GET['login'];

    $sql = "select * from usuario where login='$login'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);



    $senha=$exibe['senha'];

} else {

    $erro++;
}
?>
<div class="container bg-info pag">
    <h1>Editar dados de Usuário</h1>
    <hr>
    <?php

    if ($erro) {

        echo "
            <p>Nenhum usuário foi selecinado</p>
            <p>Clique em voltar para selecionar o usuário que deseja editar</p>
            ";
    } else {


    ?>
        <form name="form" action="updateSenha.php" method="post">
            <input type="hidden" class="form-control" name="login" value="<?php echo $login; ?>" required>
            <div class="mb-3">
                <label class="form-label">Nova senha</label>
                <input type="password" class="form-control" name="senha" value="<?php echo $senha; ?>" required>
            </div>
        <?php
    }
        ?>
        <div class="row">
            <div class="col text-start">
                    <button type="button" class="btn btn-danger btn-sm" onclick="window.history.go(-1)">
                        Voltar
                    </button>
            </div>
            <div class="col text-end">
                <button class="btn btn-success btn-sm" type="submit">
                    Alterar senha
                </button>

            </div>
        </div>
        </form>
</div>
<?php
include "../adm/footer.php";
?>