<?php

require_once __DIR__ . "/../lib/php/recuperaOpcion.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$opcion = recuperaOpcion("opciones");

$opciones = [
    "cve" => "- Hola, ¿tienen libros para el cansancio?\n- Sí, pero están agotados.",
    "cpu" => "- ¿Sabes cuál es el animal más antiguo?\n- La cebra, porque está en blanco y negro.",
    "fpar" => "- Mamá, en la escuela me llaman distraído.\n- ¡Juanito, tú vives en la casa de enfrente!",
    "gmla" => "- ¿Cómo se dice pañuelo en chino?\n- Saka-moco.",
    "pjam" => "- ¿Qué le dice un gusano a otro gusano?\n- ¡Voy a dar una vuelta a la manzana!",
    "pvjj" => "- ¿Por qué los pájaros no usan Facebook?\nPorque ya tienen Twitter."
];

$resultado = isset($opciones[$opcion]) ? $opciones[$opcion] : "Opción no reconocida, seleccione una.";

devuelveJson($resultado);
