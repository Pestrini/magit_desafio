<?php 
    session_start();
    if(!$_SESSION['usuario']){
        header('Location: ../paginas/login.php');
    }
?>