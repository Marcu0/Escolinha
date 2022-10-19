<?php

if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['login'])) {
    echo "
        <script>
            alert('Área restrita!');
            window.location='../adm/login.php';
        </script>
    ";
} else {
    $nivel = $_SESSION['nivel'];
    $nome = $_SESSION['nome'];
    if ($nivel != 'adm') {
        echo "
            <script>
                alert('$nome, área restrita a administradores.');
                window.location ='../adm/index.php';
            </script>
        ";
    }
}
?>