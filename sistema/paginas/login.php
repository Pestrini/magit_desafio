<?php 
    session_start();
?>
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
    <main class="container">
        <div class="row top">
            <section class="col">
                <img src="../images/gps-gps-icon-3d-cor-vermelha-caindo-no-mapa-de-ruas-em-whitebackground_99087-3.jpg"
                    class="img-fluid" alt="Responsive image">
            </section>
            <section class="col">
                <form action="../db/logar.php" method="post">
                    <div class="form-group">
                        <label for="validationServer01">Usuario</label>
                        <input type="text" name='usuario' class="form-control  
                    <?php if(isset( $_SESSION['user_nao_autenticado'])):?> is-invalid <?php endif; unset( $_SESSION['user_nao_autenticado']); ?>" 
                            id="validationServer01" aria-describedby="emailHelp">
                        <div class="invalid-feedback" id="e-inc">
                            Usuario Incorreto.
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validationServer02">Senha</label>
                        <input type="password" name="senha" class="form-control  
                    <?php if(isset( $_SESSION['pess_nao_autenticado'])):?> is-invalid <?php endif; unset( $_SESSION['ess_nao_autenticado']); ?>"  
                             id="validationServer02">
                        <div class="invalid-feedback">
                            Senha Incorreta.
                        </div>
                    </div>
                    <div class="form-group form-check-inline">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lembre-se de mim</label>
                    </div>
                    <a class="left" href="token_envio.php">esqueci a senha</a>
                    <div>
                        <button type="submit" class="btn btn-primary">entrar</button>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
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