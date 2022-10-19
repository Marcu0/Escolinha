<?php

include "conexao.php";

if (isset($_POST['login'])) {

    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);

    $sql = "select * from usuario where login='$login' and senha='$senha'";
    $testLogin = mysqli_query($conexao, $sql);
    $existe = mysqli_num_rows($testLogin);


    if ($existe) {

        $dados = mysqli_fetch_array($testLogin);
        $nome = $dados['nome'];
        $nivel = $dados['nivel'];
        $email = $dados['email'];
        $foto = $dados['foto'];

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['login'] = $login;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['nivel'] = $nivel;
        $_SESSION['foto'] = $foto;

        if ($nivel == 'adm') {
            header('location: adm.php');
        } else {

            header('location: index.php');
        }
    } else {
        echo "Usuario e senha inválidos";
    }
}
