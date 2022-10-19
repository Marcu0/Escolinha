<?php
$erro = 0;
include "../adm/controle.php";
include "../adm/conexao.php";

if (isset($_GET['idProf'])) {
    $idProf = $_GET['idProf'];

    $sql = "select * from professor where idPro=$idProf";
    $seleciona = mysqli_query($conexao,$sql);
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

    <div class="container pag">
        <div class="text-end">
            <a href="listarProf.php">
                <button class="btn btn-success btn-sm">
                    Listar Professor
                </button>
            </a>
        </div>
        <h2>Professor</h2>
        <hr>
        <div class="container text-start bg-gradient p-3">
            <?php
            
            if (!$erro){

                echo "
                <p>ID: $idProf</p>
                 <p>Nome: $nome</p>
                 <p>Endereço: $endereco</p>
                 <p>Telefone: $telefone</p>
                 <p>E-mail: $email</p>
                 <p>Matéria: $materia</p>
                
                ";

            } else {

                echo "
                <p>Nenhum aluno foi selecinado</p>
                <p>Clique em listar professor para selecionar um professor</p>
                ";
            }
            
            
            ?>
        </div>
        <div class="row">
            <div class="col text-start">
                <a href="listarProf.php">
                    <button class="btn btn-danger btn-sm">
                        Voltar
                    </button>
                </a>
            </div>
            <div class="col text-end">
                <a href="editarProf.php">
                    <button class="btn btn-success btn-sm">
                        Editar Professor
                    </button>
                </a>
            </div>
        </div>
    </div>
    <?php
    include "../adm/footer.php";
?>