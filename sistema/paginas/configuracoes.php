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

    <main class="main">
        <div class="row">
            <section class="col-2 menu_lateral">
                <nav class="nav flex-column">
                    <div class="link-menu">
                        <img class="logo" src="../images/painel-de-controle.png" alt="">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </div>
                    <div class="link-menu">
                        <img class="logo" src="../images/definicoes.png" alt="">
                        <a class="nav-link" href="configuracoes.php">Configurações</a>
                    </div>
                    <div class="link-menu">
                        <img class="logo" src="../images/sair.png" alt="">
                        <a class="nav-link" href='../db/logout.php'>Sair</a>
                    </div>
                </nav>
            </section>
            <section class="col principal">
                <div class="conf">
                    <div class="alert  badge-primary" role="alert">
                        Selecione Abaixo os Provedores
                    </div>
                    <div class="form-row align-items-center">
                        <div class="col-auto my-1">
                            <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Provedores</label>
                            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                <option value="JAMEF">JAMEF</option>
                                <option value="RTE">RTE</option>
                                <option value="GBC">GBC</option>
                                <option value="ABC">ABC</option>
                            </select>
                        </div>
                        <div class="col-auto my-1">
                        </div>
                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary" onclick="add()">Adcionar</button>
                        </div>
                    </div>
                </div>
                <div class="conf">
                    <div class="alert  badge-primary" role="alert">
                        SEUS PROVEDORES
                    </div>
                    <div class="lista" id="list_prov">
                        <div class="item_list remove" id="JAMEF">
                            <div class="alert alert-dark" role="alert">
                                JAMEF
                            </div>
                            <button class="btn-grafico" onclick="drop('JAMEF')">
                                <img src="../images/baseline_delete_black_18dp.png" alt="">
                            </button>
                        </div>
                        <div class="item_list remove" id="RTE">
                            <div class="alert alert-dark" role="alert">
                                RTE
                            </div>
                            <button class="btn-grafico" onclick="drop('RTE')">
                                <img src="../images/baseline_delete_black_18dp.png" alt="">
                            </button>
                        </div>
                        <div class="item_list remove" id="GBC">
                            <div class="alert alert-dark" role="alert">
                                GBC
                            </div>
                            <button class="btn-grafico" onclick="drop('GBC')">
                                <img src="../images/baseline_delete_black_18dp.png" alt="">
                            </button>
                        </div>
                        <div class="item_list remove" id="ABC">
                            <div class="alert alert-dark" role="alert">
                                ABC
                            </div>
                            <button class="btn-grafico" onclick="drop('ABC')">
                                <img src="../images/baseline_delete_black_18dp.png" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="../script/conf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
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