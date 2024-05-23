// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Reutilizar la función de formato numérico
function number_format(number, decimals, dec_point, thousands_sep) {
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

// Función para generar datos ficticios
function generateFakeData() {
    var data = [];
    for (var i = 0; i < 24; i++) {
        data.push(Math.floor(Math.random() * 101)); // Random values between 0 and 100
    }
    return data;
}

// Función para inicializar una gráfica
function initializeChart(chartId, label, backgroundColor, borderColor) {
    var ctx = document.getElementById(chartId);
    return new Chart(ctx, {
        type: 'line',
        data: {
            labels: Array.from({ length: 24 }, (_, i) => `${24 - i}s`),
            datasets: [{
                label: label,
                lineTension: 0.3,
                backgroundColor: backgroundColor,
                borderColor: borderColor,
                pointRadius: 1,
                pointBackgroundColor: borderColor,
                pointBorderColor: borderColor,
                pointHoverRadius: 3,
                pointHoverBackgroundColor: 'white',
                pointHoverBorderColor: borderColor,
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: generateFakeData(),
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            },
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: {
                        display: false
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        min: 0,
                        max: 100
                    },
                    gridLines: {
                        display: false
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                enabled: false
            }
        }
    });
}

// Inicializar todas las gráficas en miniatura con colores específicos
var charts = {
    cpuChart: initializeChart('cpuChart', 'CPU - Ryzen 7 5700X - 8 Core', "rgba(0, 123, 255, 0.05)", "rgba(0, 123, 255, 1)"),
    memoryChart: initializeChart('memoryChart', '16.0 GB', "rgba(123, 0, 255, 0.05)", "rgba(123, 0, 255, 1)"),
    diskChart: initializeChart('diskChart', '/dev/sda3/', "rgba(50, 205, 50, 0.05)", "rgba(50, 205, 50, 1)"),
    networkIngressTraffic: initializeChart('networkIngressTraffic', 'Trafico de entrada de red', "rgba(255, 69, 0, 0.05)", "rgba(255, 69, 0, 1)"),
    networkEgressTraffic: initializeChart('networkEgressTraffic', 'Trafico de salida de red', "rgba(255, 69, 0, 0.05)", "rgba(255, 69, 0, 1)")
};

var serverUsageChart = new Chart(document.getElementById('serverUsageChart'), {
    type: 'line',
    data: {
        labels: Array.from({ length: 24 }, (_, i) => `${24 - i}s`),
        datasets: [{
            label: 'Usage',
            lineTension: 0.3,
            backgroundColor: "rgba(0, 123, 255, 0.05)",
            borderColor: "rgba(0, 123, 255, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(0, 123, 255, 1)",
            pointBorderColor: "rgba(0, 123, 255, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(0, 123, 255, 1)",
            pointHoverBorderColor: "rgba(0, 123, 255, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data: generateFakeData(),
        }],
    },
    options: {
        maintainAspectRatio: false,
        layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
        },
        scales: {
            xAxes: [{
                time: {
                    unit: 'date'
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 7
                }
            }],
            yAxes: [{
                ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a percentage sign in the ticks
                    callback: function (value, index, values) {
                        return value + '%';
                    }
                },
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }],
        },
        legend: {
            display: false
        },
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: 'index',
            caretPadding: 10,
            callbacks: {
                label: function (tooltipItem, chart) {
                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                    return datasetLabel + ': ' + tooltipItem.yLabel + '%';
                }
            }
        }
    }
});

// Event listeners para los botones de gráficas
document.querySelectorAll('.chart-button').forEach(function(button) {
    button.addEventListener('click', function() {
        var chartId = this.getAttribute('data-chart');
        var selectedChart = charts[chartId];
        var backgroundColor = selectedChart.data.datasets[0].backgroundColor;
        var borderColor = selectedChart.data.datasets[0].borderColor;
        // Actualizar el título de la gráfica principal
        document.getElementById('chartTitle').innerText = selectedChart.data.datasets[0].label;
        // Actualizar la gráfica principal
        serverUsageChart.data.datasets[0].data = selectedChart.data.datasets[0].data;
        serverUsageChart.data.datasets[0].backgroundColor = backgroundColor;
        serverUsageChart.data.datasets[0].borderColor = borderColor;
        serverUsageChart.data.datasets[0].pointBackgroundColor = borderColor;
        serverUsageChart.data.datasets[0].pointHoverBackgroundColor = 'white';
        serverUsageChart.data.datasets[0].pointBorderColor = borderColor;
        serverUsageChart.data.datasets[0].pointHoverBorderColor = borderColor;
        serverUsageChart.update();
    });
});  
