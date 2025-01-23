// Función para listar empleados
function listarEmpleados() {
    fetch('/api/empleados')
        .then(response => response.json())
        .then(data => {
            const empleadosDiv = document.getElementById('empleados');
            empleadosDiv.innerHTML = '<ul>' + data.map(emp => `
                <li>${emp.nombre} - ${emp.puesto} - $${emp.salario}
                <button onclick="eliminarEmpleado(${emp.id})">Eliminar</button></li>
            `).join('') + '</ul>';
        });
}

// Función para eliminar un empleado
function eliminarEmpleado(id) {
    fetch('/api/empleados/delete', {
        method: 'DELETE',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id })
    }).then(() => listarEmpleados());
}

// Llama a listar empleados al cargar
listarEmpleados();
