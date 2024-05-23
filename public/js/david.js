function startUpTimeCounter() {
    var upTimeElement = document.getElementById("upTime");
    if (!upTimeElement) {
        console.error("No se encontró ningún elemento con la ID 'upTime'");
        return;
    }

    // Obtener la fecha y hora actual
    var startTime = new Date();

    // Función para actualizar el contador de tiempo
    function updateUpTime() {
        // Calcular la diferencia de tiempo entre la hora actual y la hora inicial
        var currentTime = new Date();
        var timeDifference = currentTime - startTime;

        // Calcular el tiempo transcurrido en días, horas, minutos y segundos
        var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        // Formatear el tiempo transcurrido
        var formattedTime = `${days.toString().padStart(2, '0')}:${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

        // Actualizar el contenido del elemento con la ID "upTime"
        upTimeElement.textContent = formattedTime;
    }

    // Actualizar el contador cada segundo
    setInterval(updateUpTime, 1000);
}

// Iniciar el contador de tiempo al cargar la página
window.onload = startUpTimeCounter;

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 0) {
            $('#content').addClass('scrolled');
        } else {
            $('#content').removeClass('scrolled');
        }
    });
});
