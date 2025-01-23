/*archivo AJAX para la petición a la API*/
document.getElementById('loginForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Evitar el envío tradicional del formulario

    const usuario = document.getElementById('usuario').value;
    const password = document.getElementById('password').value;

    // Validar campos vacíos
    if (!usuario || !password) {
        alert('Por favor, completa todos los campos.');
        return;
    }

    // Crear objeto XMLHttpRequest
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/api/login', true);
    xhr.setRequestHeader('Content-Type', 'application/json');

    // Manejar la respuesta
    xhr.onload = function () {
        const responseDiv = document.getElementById('response');
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            responseDiv.innerHTML = `<p style="color: green;">${response.message}</p>`;
        } else {
            const error = JSON.parse(xhr.responseText);
            responseDiv.innerHTML = `<p style="color: red;">${error.error}</p>`;
        }
    };

    // Manejar errores
    xhr.onerror = function () {
        alert('Error al enviar la solicitud.');
    };

    // Enviar datos como JSON
    const data = JSON.stringify({ usuario, password });
    xhr.send(data);
});
