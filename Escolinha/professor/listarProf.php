<?php
include "../adm/controle.php";
include "../adm/conexao.php";
include "../adm/seguranca.php";
$sql = "select * from professor order by nome";
$seleciona = mysqli_query($conexao, $sql);


?>
<div class="container bg-info pag">
    <div class="text-end ">
        <a href="formProf.php">
            <button type="button" class="btn btn-success btn-sm">CADASTRAR NOVO PROFESSOR</button>
        </a>
    </div>
    <h1>Lista de Professores</h1>

    <div class="container text-center">
        <div class="p-2 row text-bg-dark">
            <div class="col-1">
                ID
            </div>
            <div class="col-2">
                NOME
            </div>
            <div class="col-2">
                EMAIL
            </div>
            <div class="col-2">
                TELEFONE
            </div>
            <div class="col-2">
                MATÉRIA
            </div>
            <div class="col-3">
                CONTROLE
            </div>
        </div>

        <?php

        while ($exibe = mysqli_fetch_array($seleciona)) {

            $idProf = $exibe['idPro'];


        ?>
            <div class="row p-1 bg-gradient bg-opacity-50">
                <div class="col-1">
                    <?php echo $exibe['idPro']; ?>
                </div>
                <div class="col-2">
                    <?php echo $exibe['nome']; ?>
                </div>
                <div class="col-2">
                    <?php echo $exibe['email']; ?>
                </div>
                <div class="col-2">
                    <?php echo $exibe['telefone']; ?>
                </div>
                <div class="col-2">
                    <?php echo $exibe['materia']; ?>
                </div>
                <div class="col-3">
                    <a href="vizualizarProf.php?idProf=<?php echo $idProf; ?>">
                        <button type="button" class="btn btn-success btn-sm">Vizualizar</button>
                    </a>
                    <a href="editarProf.php?idProf=<?php echo $idProf; ?>">
                        <button type="button" class="btn btn-primary btn-sm">Editar</button>
                    </a>
                    <a href="excluirProf.php?idProf=<?php echo $idProf; ?>">
                        <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Você tem certeza que quer excluir?')">Excluir</button>
                    </a>
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