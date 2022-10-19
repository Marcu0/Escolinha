<?php
include "../adm/controle.php";
include "../adm/seguranca.php";
?>
<div class="container bg-info pag">
    <h1>Cadastro de Professores</h1>
    <form name="form" action="incluirProf.php" method="post">
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Endereço</label>
            <input type="text" class="form-control" name="endereco" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <input type="text" class="form-control" name="telefone" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Matéria</label>
            <input type="text" class="form-control" name="materia" require>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

</div>
<?php
include "../adm/footer.php";
?>