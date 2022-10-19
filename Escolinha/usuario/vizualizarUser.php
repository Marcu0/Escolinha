<?php
$erro = 0;
include "../adm/controle.php";
include "../adm/conexao.php";

if (isset($_GET['login'])) {
    $login = $_GET['login'];

    $sql = "select * from usuario where login='$login'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);

    $login = $exibe['login'];
    $senha = $exibe['senha'];
    $nome = $exibe['nome'];
    $email = $exibe['email'];
    $nivel = $exibe['nivel'];
    $foto = $exibe['foto'];
} else {

    $erro++;
}

?>
<div class="container pag">
    <div class="text-end">
        <a href="listarUser.php">
            <button class="btn btn-success btn-sm">
                Listar Usuário
            </button>
        </a>
    </div>
    <h2>Usuário: <?php echo $login ?></h2>
    <hr>
    <div class="container text-start bg-gradient p-3">
        <div class="row">
            <div class="col-2 text-center">
                <img src="<?php echo $foto ?>">
                <a href="editarFoto.php?login=<?php echo $login ?>">ALTERAR FOTO</a>
            </div>
            <div class="col-10">
                <?php

                if (!$erro) {

                    echo "
                    <p>Login: $login</p>
                    <p>Senha: ******</p>
                    <p>Nome: $nome</p>
                    <p>E-mail: $email</p>
                    <p>Nivel: $nivel</p>
                    
                    
                    ";
                } else {

                    echo "
                    <p>Nenhum Usuário foi selecinado</p>
                    <p>Clique em listar usuario para selecionar um usuário</p>
                    ";
                }


                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-start">
                <button class="btn btn-danger btn-sm" onclick="window.history.go(-1)">
                    Voltar
                </button>
        </div>
        <div class="col">
            <a href="editarSenha.php?login=<?php echo $login?>">
                <button class="btn btn-danger btn-sm">
                    Alterar senha
                </button></a>
        </div>
        <div class="col text-end">
            <a href="editarUser.php?login=<?php echo $login ?>">
                <button class="btn btn-success btn-sm">
                    Editar Dados
                </button></a>
        </div>
    </div>
</div>
<?php
include "../adm/footer.php";

?>