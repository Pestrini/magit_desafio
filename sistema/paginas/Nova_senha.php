
<!DOCTYPE html>
<html lang="pt-br">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="../css/styles.css">

<title>Sistema de Controle</title>
</head>

<body>
    <section class="token">
        <form  method="post">
            <h3>Atualize sua senha</h3>
            <label>Insira sua nova senha</label>
            <input type="password" name="nova_senha" class="form-control">
            <code>Volte para o Login e Acesse Novamente!</code><br><br>
            <input type="submit" value="Alterar Senha" class="btn btn-outline-success btn-lg btn-block">
            <a href="http://localhost/sistema/paginas/login.php" target="_blank">Voltar para o Login</a>
            <input type="hidden" name="env" value="form">
        </form>
        <?php require('../db/nova_senha.php');
         echo verifica_dados($mysql)?>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>