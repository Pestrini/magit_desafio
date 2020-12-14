<?php 
    require('conexao.php');
    function verifica_dados($mysql){
        if(isset($_POST['env'])&& $_POST['env']=="form"){
            $pass = md5(addslashes($_POST['nova_senha']));
            $sql = $mysql->prepare("UPDATE ClientApi SET Password = ? WHERE idClient = '1'");
            $sql->bind_param("s", $pass);
            $sql->execute();
            echo "Senha alterada com Sucesso";
        }
    }
?>