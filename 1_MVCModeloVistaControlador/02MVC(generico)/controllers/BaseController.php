<?php
class BaseController {
    public function execute($action) {
        // Verificar si el método existe en el controlador
        if (method_exists($this, $action)) {
            $this->$action(); // Llamar al método dinámicamente
        } else {
            echo "Acción no encontrada: $action";
        }
    }

    // Métodos comunes para todos los controladores pueden ir aquí
    protected function render($viewName, $data = []) {
        extract($data); // Extraer datos como variables para la vista
        include "views/header.php";
        include "views/$viewName.php";
        include "views/footer.php";
    }
}
