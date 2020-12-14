MSM();
Chamada();
colunmMSM();
colunmCM();
doughnutMSM();
doughnutCM();

function MSM(){
    var contratado = document.getElementById("contratado-sms");
    var utilizado = document.getElementById("utilizado-sms");
    var extra = document.getElementById("extra-sms");
    var uso = document.getElementById("usoMSM");

    contratado.innerHTML = "10000";
    utilizado.innerHTML = "0";
    extra.innerHTML = "0";
    uso.innerHTML = "8";
}

function Chamada() {
    var contratado = document.getElementById("contratado-cm");
    var utilizado = document.getElementById("utilizado-cm");
    var extra = document.getElementById("extra-cm");
    var uso = document.getElementById("usoCM");

    contratado.innerHTML = "10000";
    utilizado.innerHTML = "0";
    extra.innerHTML = "0";
    uso.innerHTML = "5";
}


function colunmMSM(){
    var ctx = document.getElementById('myChartMSM').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Seg.', 'Ter.', 'Qua.', 'Qui.', 'Sex.', 'Sab.','Dom.'],
        datasets: [{
            label: '# of Votes',
            data: [6, 7, 9, 5, 7, 3, 4],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
}


function colunmCM(){
    var ctx = document.getElementById('myChartCM').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Seg.', 'Ter.', 'Qua.', 'Qui.', 'Sex.', 'Sab.','Dom.'],
            datasets: [{
                label: '# of Votes',
                data: [6, 7, 9, 5, 7, 3, 4],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
};


function doughnutCM(){
    var ctx = document.getElementById('DmyChartCM').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['CONTRATADOS', 'UTILIZADOS', 'EXTRAS'],
            datasets: [{
                label: '# of Votes',
                data: [10000, 0, 0],
                backgroundColor: [
                    'rgba(0, 123, 255, 0.2)',                              
                    'rgba(40, 206, 69, 0.2)',
                    'rgba(255, 53, 69, 0.2)'
                ],
                borderColor: [
                    'rgba(0, 123, 255, 0.2)',                              
                    'rgba(40, 206, 69, 0.2)',
                    'rgba(255, 53, 69, 0.2)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
};


function doughnutMSM(){
    var ctx = document.getElementById('DmyChartSMS').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['CONTRATADOS', 'UTILIZADOS', 'EXTRAS'],
            datasets: [{
                label: '# of Votes',
                data: [10000, 0, 0],
                backgroundColor: [
                    'rgba(0, 123, 255, 0.2)',                              
                    'rgba(40, 206, 69, 0.2)',
                    'rgba(255, 53, 69, 0.2)'
                ],
                borderColor: [
                    'rgba(0, 123, 255, 0.2)',                              
                    'rgba(40, 206, 69, 0.2)',
                    'rgba(255, 53, 69, 0.2)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
};






