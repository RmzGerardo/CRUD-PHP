

<?php

require_once "../models/persona.model.php";

// Recibir los datos del formulario
$arraynName = array(
    'nombres' => $_POST["nombres"],
    'email' => $_POST["email"],
    'edad' => $_POST["edad"]
);

// Llamar al método guardarDato del modelo Persona y devolver la respuesta en formato JSON
echo json_encode(Persona::guardarDato($arraynName));

?>
