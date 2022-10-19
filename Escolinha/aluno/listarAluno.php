<?php
include "../adm/controle.php";
include "../adm/conexao.php";
include "../adm/seguranca.php";
$sql = "select * from alunos order by nome";
$seleciona = mysqli_query($conexao, $sql);


?>
    <div class="container bg-info pag">
        <div class="text-end ">
            <a href="formAluno.php">
                <button type="button" class="btn btn-success btn-sm">CADASTRAR NOVO ALUNO</button>
            </a>
        </div>
        <h1>Lista de Alunos</h1>

        <div class="container text-center">
            <div class="p-2 row text-bg-dark">
                <div class="col-1">
                    ID
                </div>
                <div class="col-2">
                    NOME
                </div>
                <div class="col-3">
                    EMAIL
                </div>
                <div class="col-2">
                    TELEFONE
                </div>
                <div class="col-1">
                    TURMA
                </div>
                <div class="col-3">
                    CONTROLE
                </div>
            </div>

            <?php

            while ($exibe = mysqli_fetch_array($seleciona)) {

                $idAluno = $exibe['id'];


            ?>
                <div class="row p-1 bg-gradient bg-opacity-50">
                    <div class="col-1">
                        <?php echo $exibe['id']; ?>
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['nome']; ?>
                    </div>
                    <div class="col-3">
                        <?php echo $exibe['email']; ?>
                    </div>
                    <div class="col-2">
                        <?php echo $exibe['telefone']; ?>
                    </div>
                    <div class="col-1">
                        <?php echo $exibe['turma']; ?>
                    </div>
                    <div class="col-3">
                        <a href="vizualizarAluno.php?idAluno=<?php echo $idAluno; ?>">
                            <button type="button" class="btn btn-success btn-sm">Vizualizar</button>
                        </a>
                        <a href="editarAluno.php?idAluno=<?php echo $idAluno; ?>">
                            <button type="button" class="btn btn-primary btn-sm">Editar</button>
                        </a>
                        <a href="excluirAluno.php?idAluno=<?php echo $idAluno; ?>">
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