<?php

//echo 'URL solicitada =  "' . $_SERVER['QUERY_STRING'] . '"';

require '../Core/Router.php';

$router = new Router();

//echo get_class($router);

//añadir las rutas
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('posts/new', ['controller' => 'Posts', 'action' => 'new']);

//listamos las rutas
//echo '<pre>';
//var_dump($router->getRoutes());
//echo '<pre>';

//Preparamos el match de las URL

$fullurl = explode("&", $_SERVER['QUERY_STRING']);
$file = $fullurl[0];
$url = $fullurl[1];

//echo $url;

if ($router->match($url))
{
    echo '<pre>';
    var_dump($router->getParams());
    echo '<pre>';
} else {
    echo "Ninguna ruta se ha encontrado para la URL $url";
}

?>