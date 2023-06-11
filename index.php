<?php
// Obtener la ruta solicitada
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$url = rtrim($url, '/'); // Eliminar la barra diagonal al final si existe

// Rutas disponibles y sus correspondientes archivos
$rutas = [
    '' => 'index',
    '/actividades-sociales' => 'actividades-sociales',
    '/nosotros' => 'nosotros',
    '/donaciones' => 'donaciones',
    '/donaciones/donacion-de-cosas-usadas' => 'donaciones/donacion-de-cosas-usadas',
    '/donaciones/donacion-de-ropa' => 'donaciones/donacion-de-ropa',
    '/donaciones/donacion-de-muebles' => 'donaciones/donacion-de-muebles',
    '/donaciones/donacion-de-electrodomesticos' => 'donaciones/donacion-de-electrodomesticos',
    '/donaciones/donacion-de-computadoras' => 'donaciones/donacion-de-computadoras',
    '/donaciones/donacion-de-aires-acondicionados' => 'donaciones/donacion-de-aires-acondicionados',
    '/donaciones/donacion-de-artefactos' => 'donaciones/donacion-de-artefactos',
    '/donaciones/donacion-de-libros' => 'donaciones/donacion-de-libros',
    '/donaciones/donacion-de-reciclaje' => 'donaciones/donacion-de-reciclaje',
    '/donaciones/emaus-en-santiago-de-surco' => 'donaciones/emaus-en-santiago-de-surco',
    '/donaciones/emaus-en-san-borja' => 'donaciones/emaus-en-san-borja',
    '/donaciones/emaus-en-la-molina' => 'donaciones/emaus-en-la-molina',
    '/donaciones/emaus-en-miraflores' => 'donaciones/emaus-en-miraflores',
    '/donaciones/emaus-en-san-isidro'=> 'donaciones/emaus-en-san-isidro'
];

// Verificar si la ruta existe en el array de rutas
if (array_key_exists($url, $rutas)) {
    // Construir la ruta del archivo
    $rutaArchivo = 'pages/' . $rutas[$url] . '.php';
    //print_r($url);
    
    // Verificar si el archivo existe
    if (file_exists($rutaArchivo)) {
        // Incluir el archivo correspondiente
        include $rutaArchivo;
        //print_r($rutaArchivo);
    } else {
        // Archivo no encontrado, incluir controlador de página no encontrada
        include 'pages/notfound.php';
    }
} else {
    // Ruta no encontrada, incluir controlador de página no encontrada
    include 'pages/notfound.php';
}
