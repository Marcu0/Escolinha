<?php

if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['login'])){
    echo "
        <script>
            alert('Área restrita!');
            window.location='../adm/login.php'
        </script>
    ";
}

?>