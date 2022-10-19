<?php

include "../adm/conexao.php";
include "../adm/controle.php";

if (isset($_GET['login'])) {

    $login = $_GET['login'];
    $sql = "select * from usuario where login='$login'";
    $seleciona = mysqli_query($conexao, $sql);
    $exibe = mysqli_fetch_array($seleciona);
}

?>


<div class="container pag">
    <h1>ALterar Foto</h1>
    <hr>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="updateFoto.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="login" value="<?php echo $login ?>">
                <div class="form-group">
                    <input type="file" name="foto" id="foto">
                </div>
                <div class="row">
                    <div class="col text-start">
                        <button type="button" class="btn btn-warning btn-sm mt-5" onclick="window.history.go(-1)">Voltar</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success btn-sm mt-5">Enviar foto</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php

include "../adm/footer.php";


