
<?php
    $host = "localhost";
    $usuario= "root";
    $senha ="";
    $db = "db_dados";

    $mysql =  mysqli_connect($host, $usuario, $senha, $db) or die('Nao foi possivel conectar ao banco ');

?>