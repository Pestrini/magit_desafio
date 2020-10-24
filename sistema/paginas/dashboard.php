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
                        <a class="nav-link" href="login.php">Sair</a>
                    </div>
                </nav>
            </section>
            <section class="col principal">
                <div class="graficos">
                    <div class="grafico">
                        <button type="button" class="btn-grafico" data-toggle="modal" data-target="#exampleModal"
                            onclick="abrir('SMS')" data-whatever="@mdo">
                            <canvas id="DmyChartSMS" width="400" height="400"></canvas>
                        </button>
                        <div class="legenda">
                            <div class="row">
                                <div class="col-sm text-primary">
                                    <b id="contratado-sms"></b>
                                </div>
                                <div class="col-sm text-success">
                                    <b id="utilizado-sms"></b>
                                </div>
                                <div class="col-sm text-danger">
                                    <b id="extra-sms"></b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm text-primary">
                                    <b>CONTRATADOS</b>
                                </div>
                                <div class="col-sm text-success">
                                    <b>UTILIZADOS</b>
                                </div>
                                <div class="col-sm text-danger">
                                    <b>EXTRAS</b>
                                </div>
                            </div>
                        </div>
                        <div class="planilha">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2">Resumo do Plano Pacote SMS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Nome do Plano</th>
                                        <td>APP20</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Plano Mensal</th>
                                        <td>R$ 50,00</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Valor por MSM</th>
                                        <td>R$ 0,10</td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="grafico-barra">
                        <canvas id="myChartMSM" width="500" height="400"></canvas>
                        </div>
                        <div class="legenda">
                            <b class="col-sm text-primary">Uso Médio Diario de MSM - </b>
                            <b class="col-sm text-primary" id="usoMSM"></b>
                        </div>
                    </div>
                    <div class="grafico">
                        <button type="button" class="btn-grafico" data-toggle="modal" data-target="#exampleModal"
                            onclick="abrir('Chamada')" data-whatever="@mdo">
                            <canvas id="DmyChartCM" width="400" height="400"></canvas>
                        </button>
                        <div class="legenda">
                            <div class="row">
                                <div class="col-sm text-primary">
                                    <b id="contratado-cm"></b>
                                </div>
                                <div class="col-sm text-success">
                                    <b id="utilizado-cm"></b>
                                </div>
                                <div class="col-sm text-danger">
                                    <b id="extra-cm"></b>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm text-primary">
                                    <b>CONTRATADOS</b>
                                </div>
                                <div class="col-sm text-success">
                                    <b>UTILIZADOS</b>
                                </div>
                                <div class="col-sm text-danger">
                                    <b>EXTRAS</b>
                                </div>
                            </div>
                        </div>
                        <div class="planilha">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th colspan="2">Resumo do Plano Pacote Chamada</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Nome do Plano</th>
                                        <td>APP21</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Plano Mensal</th>
                                        <td>R$ 50,00</td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Valor por Ligação</th>
                                        <td>R$ 0,50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="grafico-barra">
                        <canvas id="myChartCM" width="500" height="400"></canvas>
                        </div>
                        <div class="legenda">
                            <b class="col-sm text-primary">Uso Médio Diario de Chamada - </b>
                            <b class="col-sm text-primary" id="usoCM"></b>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detalhes do Meu PLano</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-inline">
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="inputMesAno" class="sr-only">Mês/ano</label>
                                        <input type="text" class="form-control" id="inputMesAno" value="Setembro/2020">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2" onclick="buscar()">Buscar
                                        Dados</button>
                                </div>
                                <div class="form-group linha">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr class="bg-primary linha">
                                                <th colspan="4">
                                                    <h4 class=" badge-primary" id="inMesAno"></h4>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Nome</th>
                                                <th scope="col">Valor Comercial</th>
                                                <th scope="col">Valor Adiciona</th>
                                                <th scope="col">Qtde. Max Extra</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-active linha">
                                                <td>APP20</td>
                                                <td>R$ 50,00</td>
                                                <td>R$ 0,10</td>
                                                <td>1000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group top">
                                    <table class="table table-sm">
                                        <thead>
                                            <tr class="bg-primary linha">
                                                <th colspan="7">
                                                    <h6 class=" badge-primary">Meu Uso</h6>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th scope="col">Quantidade</th>
                                                <th scope="col">Usados</th>
                                                <th scope="col">Disponiveis</th>
                                                <th scope="col">Extras</th>
                                                <th scope="col">Valor Mensal</th>
                                                <th scope="col">Valor Adicional por Extra</th>
                                                <th scope="col">Valor Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="table-active linha">
                                                <td>10.000</td>
                                                <td>0</td>
                                                <td>10.000</td>
                                                <td>1000</td>
                                                <td>R$ 50,00</td>
                                                <td>R$ 0,10</td>
                                                <td>R$ 50,00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
    <script src="../script/graficos.js"></script>
    <script src="../script/tabela.js"></script>
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