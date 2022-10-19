<?php
include "../adm/controle.php";
include "../adm/conexao.php";
include "../adm/seguranca.php";

$sql = "select * from usuario order by nome";
$seleciona = mysqli_query($conexao, $sql);


?>
<div class="container bg-info pag">
    <div class="text-end ">
        <a href="formUser.php">
            <button type="button" class="btn btn-success btn-sm">CADASTRAR NOVO USUÁRIO</button>
        </a>
    </div>
    <h1>Lista de Usuário</h1>

    <div class="container text-center">
        <div class="p-2 row text-bg-dark">
            <div class="col-1">
                FOTO
            </div>
            <div class="col-2">
                LOGIN
            </div>
            <div class="col-1">
                SENHA
            </div>
            <div class="col-2">
                NOME
            </div>
            <div class="col-2">
                EMAIL
            </div>
            <div class="col-1">
                NIVEL
            </div>
            <div class="col-3">
                CONTROLE
            </div>
        </div>

        <?php

        while ($exibe = mysqli_fetch_array($seleciona)) {

            $login = $exibe['login'];


        ?>
            <div class="row p-2 bg-gradient bg-opacity-50">
                <div class="col-1">
                    <img src="<?php echo $exibe['foto']; ?>" class="foto">
                </div>
                <div class="col-2">
                    <?php echo $exibe['login']; ?>
                </div>
                <div class="col-1">
                    *******
                </div>
                <div class="col-2">
                    <?php echo $exibe['nome']; ?>
                </div>
                <div class="col-2">
                    <?php echo $exibe['email']; ?>
                </div>
                <div class="col-1">
                    <?php echo $exibe['nivel']; ?>
                </div>
                <div class="col-3">
                    <a href="vizualizarUser.php?login=<?php echo $login; ?>">
                        <button type="button" class="btn btn-success btn-sm">Visualizar</button></a>
                    <a href="editarUser.php?login=<?php echo $login; ?>">
                        <button type="button" class="btn btn-primary btn-sm">Editar</button></a>
                    <a href="excluirUser.php?login=<?php echo $login; ?>">
                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Você tem certeza que quer excluir?')">Excluir</button></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php
    include "../adm/footer.php";
?>