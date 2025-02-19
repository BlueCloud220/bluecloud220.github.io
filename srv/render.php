<?php

require_once __DIR__ . '/../lib/php/devuelveJson.php';
require_once __DIR__ . '/../lib/php/devuelveErrorInterno.php';

try {

    $lista = [
        [
            'nombre' => 'Ceballos Villalba Eduardo',
            'chiste' => '- Hola, ¿tienen libros para el cansancio? - Sí, pero están agotados.'
        ],
        [
            'nombre' => 'Colin Pérez Usiel',
            'chiste' => '- ¿Sabes cuál es el animal más antiguo? - La cebra, porque está en blanco y negro.'
        ],
        [
            'nombre' => 'Franco Pulido Alan Rodrigo',
            'chiste' => '- Mamá, en la escuela me llaman distraído. - ¡Juanito, tú vives en la casa de enfrente!'
        ],
        [
            'nombre' => 'García Mendoza Luis Alberto',
            'chiste' => '- ¿Cómo se dice pañuelo en chino? - Saka-moco.'
        ],
        [
            'nombre' => 'Pacheco Jara Anheli Magdalena',
            'chiste' => '- ¿Qué le dice un gusano a otro gusano? - ¡Voy a dar una vuelta a la manzana!'
        ],
        [
            'nombre' => 'Pinzón Vázquez Jonathan Jesús',
            'chiste' => '- ¿Por qué los pájaros no usan Facebook? Porque ya tienen Twitter.'
        ],
    ];

    // Genera el código HTML de la lista.
    $render = '';
    foreach ( $lista as $modelo ) {
        /* Codifica nombre y chiste para que cambie los caracteres
        * especiales y el texto no se pueda interpretar como HTML.
        * Esta técnica evita la inyección de código. */
        $nombre = htmlentities( $modelo[ 'nombre' ] );
        $chiste = htmlentities( $modelo[ 'chiste' ] );
        $render .=
        "<li class='md-two-line'>
            <span class='headline'>{$nombre}</span>
            <span class='supporting'>{$chiste}</span>
        </li>";
    }

    devuelveJson( [ 'lista' => [ 'innerHTML' => $render ] ] );
} catch ( Throwable $error ) {

    devuelveErrorInterno( $error );
}
