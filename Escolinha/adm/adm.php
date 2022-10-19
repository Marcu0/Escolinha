<?php
include "controle.php";
include "segurancaAdm.php"
?>
<link rel="stylesheet" href="../css/style.css">
<style>
    img a:hover {
        opacity: 0.5;
    }
    body{
        background-image: url(https://i.ytimg.com/vi/oM6VSGoadUI/maxresdefault.jpg);
        
    }

    
</style>
<div class="container">
    <div class="row mt-4">
        <div class="col text-center">
            <a href="../usuario/listarUser.php">
                <img src="../img/user.png">
                Usuário
            </a>
        </div>
        <div class="col text-center">
            <a href="../aluno/listarAluno.php">
                <img src="../img/aluno.png">
                Alunos
            </a>

        </div>
        <div class="col text-center">
            <a href="../professor/listarProf.php">
                <img src="../img/prof.png">
                Professores
            </a>
        </div>
    </div>
</div>
<?php

include "footer.php"

?>