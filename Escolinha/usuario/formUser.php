<?php
include "../adm/controle.php";
include "../adm/seguranca.php";
?>
<div class="container bg-info pag">
    <h1>Cadastro de Usuário</h1>
    <form name="form" action="incluirUser.php" method="post">
        <div class="mb-3">
            <label class="form-label">Login</label>
            <input type="text" class="form-control" name="login" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="password" class="form-control" name="senha" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>

<?php
include "../adm/footer.php";
?>