// Asegúrate de incluir la librería Chart.js en tu HTML
// <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

document.addEventListener('DOMContentLoaded', function() {
    // Función para inicializar una gráfica
function initializeChart(chartId, label, backgroundColor, borderColor) {
    var ctx = document.getElementById(chartId);
    return new Chart(ctx, {
        type: 'line',
        data: {
            labels: Array.from({ length: 10 }, (_, i) => `${24 - i}s`),
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
        cpuChart1: initializeChart('cpuChart1', '', "rgba(50, 205, 50, 0.05)", "rgba(50, 205, 50, 1)"),
        cpuChart2: initializeChart('cpuChart2', '', "rgba(255, 69, 0, 0.05)", "rgba(255, 69, 0, 1)"),
        cpuChart3: initializeChart('cpuChart3', '', "rgba(50, 205, 50, 0.05)", "rgba(50, 205, 50, 1)"),
        cpuChart4: initializeChart('cpuChart4', '', "rgba(50, 205, 50, 0.05)", "rgba(50, 205, 50, 1)"),
        cpuChart5: initializeChart('cpuChart5', '', "rgba(255, 69, 0, 0.05)", "rgba(255, 69, 0, 1)")
    };

    // Función para generar datos falsos
    function generateFakeData() {
        return Array.from({ length: 10 }, () => Math.floor(Math.random() * 100));
    }
});
