<?php
session_start();
    include('conexao.php');

    if(empty($_POST['usuario'])|| empty($_POST['senha'])){
        header('Location: ../paginas/login.php');
        exit();
    }
    $usuario = mysqli_real_escape_string( $mysql, $_POST['usuario']);
    $senha = mysqli_real_escape_string( $mysql, $_POST['senha']);

    $query = "select clientId, Username from clientapi where Username = '{$usuario}' and Password= md5('{$senha}')";
    $result = mysqli_query($mysql,$query);
    $row = mysqli_num_rows($result);
    
    if($row == 1){
        $_SESSION['usuario'] = $usuario;
        header('Location: ../paginas/dashboard.php');
    }else{
        $_SESSION['user_nao_autenticado'] = true;
        $_SESSION['pess_nao_autenticado'] = true;
        header('Location: ../paginas/login.php');
    }
?>