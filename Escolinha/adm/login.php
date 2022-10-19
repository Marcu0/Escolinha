<?php 
include "controle.php";
?>
<link rel="stylesheet" href="css/style.css">
<div class="container mt-5 text-center">

    <h1>Área de Login</h1>
    <hr>
    <div class="row bg-info pag">
        <form action="#" method="post">
            <div class="mb-3">
                <label for="login" class="form-label" name="login">Login</label>
                <input type="text" name="login" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label" name="senha">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">OK</button>
            <p><a href="usuario/formUser.php">Não possuo cadastro</a></p>
        </form>
        <div class="text-center">
            <?php
                include "valida.php";
            ?>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>