<?php

session_start(); //inicia a sessão
$_SESSION= array(); // carrega a array de dados
session_destroy();//destrói todas as sessões inciadas
header('location: \2022.1\17.08\senac\adm\index.php');//redireciona para a área de login

?>