<?php
// Obtener la ruta solicitada
$url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
$url = rtrim($url, '/'); // Eliminar la barra diagonal al final si existe

// Rutas disponibles y sus correspondientes archivos
$rutas = [
    '' => 'index',
    '/actividades-sociales' => 'actividades-sociales',
    '/nosotros' => 'nosotros',
    '/donaciones' => 'donaciones'
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
