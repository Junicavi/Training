<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
//Respuesta con Imagen
$app = new \Slim\App([
	'settings' => [
		'displayErrorDetails' => true
	]
]);
//$app->config('debug', true);
$app->get('/hello', function (Request $request, Response $response, $next) {
    $image = file_get_contents("Images/lel.jpeg");
    $mime = mime_content_type ("Images/lel.jpeg");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});
//Respuesta text/html
$app->get('/hello2/{name}', function (Request $request, Response $response, $next) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hola $name");   
    return $response->withHeader('Content-Type','text/html');
});
//Respuesta JSON
$app->get('/hello3', function (Request $request, Response $response, $next) {  
	$arr = array('a' => 1 , 'b' => 2 );
	echo json_encode($arr);
	return $response -> withHeader('Content-Type','application/json');
});
//Respuesta Imagen Dinámica
$app->get('/hello4/{name}', function (Request $request, Response $response, $next) {  
	$name = $request->getAttribute('name');
	$my_img = imagecreate( 200, 80 );
	$background = imagecolorallocate( $my_img, 0, 0, 255 );
	$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
	$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
	imagestring( $my_img, 4, 30, 25, "$name", $text_colour );
	imagesetthickness ( $my_img, 5 );
	imageline( $my_img, 30, 45, 165, 45, $line_colour );
	imagepng( $my_img , "Images/imagen.png");
    $image = file_get_contents("Images/imagen.png");
    $mime = mime_content_type ("Images/imagen.png");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});
// POST //
$app->post('/hello', function (Request $request, Response $response, $next) {
    $image = file_get_contents("Images/Earth.jpeg");
    $mime = mime_content_type ("Images/Earth.jpeg");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});
//Respuesta text/html
$app->post('/hello2/{name}', function (Request $request, Response $response, $next) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hola $name, estás usando el método POST");   
    return $response->withHeader('Content-Type','text/html');
});
//Respuesta JSON
$app->post('/hello3', function (Request $request, Response $response, $next) {  
	$arr = array('a' => 1 , 'b' => 2 , 'c' => 3, 'd' => 4, 'e' => 5);
	echo json_encode($arr);
	return $response -> withHeader('Content-Type','application/json');
});
//Respuesta Imagen Dinámica
$app->post('/hello4/{name}', function (Request $request, Response $response, $next) {  
	$name = $request->getAttribute('name');
	$my_img = imagecreate( 200, 80 );
	$background = imagecolorallocate( $my_img, 7, 164, 94 );
	$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
	$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
	imagestring( $my_img, 4, 30, 25, "$name", $text_colour );
	imagesetthickness ( $my_img, 5 );
	imageline( $my_img, 30, 45, 165, 45, $line_colour );
	imagepng( $my_img , "Images/imagen.png");
    $image = file_get_contents("Images/imagen.png");
    $mime = mime_content_type ("Images/imagen.png");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});
// PUT //
$app->put('/hello', function (Request $request, Response $response, $next) {
    $image = file_get_contents("Images/2.jpeg");
    $mime = mime_content_type ("Images/2.jpeg");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});
//Respuesta text/html
$app->put('/hello2/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hola $name, estás usando el método PUT");   
    return $response->withHeader('Content-Type','text/html');
});
//Respuesta JSON
$app->put('/hello3', function (Request $request, Response $response, $next) {  
	$arr = array('a' => 100 , 'b' => 200 , 'c' => 300, 'd' => 400, 'e' => 500);
	echo json_encode($arr);
	return $response -> withHeader('Content-Type','application/json');
});
//Respuesta Imagen Dinámica
$app->put('/hello4/{name}', function (Request $request, Response $response, $next) {  
	$name = $request->getAttribute('name');
	$my_img = imagecreate( 200, 80 );
	$background = imagecolorallocate( $my_img, 246, 216, 216 );
	$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
	$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
	imagestring( $my_img, 4, 30, 25, "$name", $text_colour );
	imagesetthickness ( $my_img, 5 );
	imageline( $my_img, 30, 45, 165, 45, $line_colour );
	imagepng( $my_img , "Images/imagen.png");
    $image = file_get_contents("Images/imagen.png");
    $mime = mime_content_type ("Images/imagen.png");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});
// DELETE
$app->delete('/hello', function (Request $request, Response $response, $next) {
    $image = file_get_contents("Images/delete.jpeg");
    $mime = mime_content_type ("Images/delete.jpeg");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});
//Respuesta text/html
$app->delete('/hello2/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hola $name, estás usando el método DELETE");   
    return $response->withHeader('Content-Type','text/html');
});
//Respuesta JSON
$app->delete('/hello3', function (Request $request, Response $response, $next) {  
	$arr = array('a' => 1000 , 'b' => 2000 , 'c' => 3000, 'd' => 4000, 'e' => 5000);
	echo json_encode($arr);
	return $response -> withHeader('Content-Type','application/json');
});
//Respuesta Imagen Dinámica
$app->delete('/hello4/{name}', function (Request $request, Response $response, $next) {  
	$name = $request->getAttribute('name');
	$my_img = imagecreate( 200, 80 );
	$background = imagecolorallocate( $my_img, 232, 232, 62 );
	$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );
	$line_colour = imagecolorallocate( $my_img, 128, 255, 0 );
	imagestring( $my_img, 4, 30, 25, "$name", $text_colour );
	imagesetthickness ( $my_img, 5 );
	imageline( $my_img, 30, 45, 165, 45, $line_colour );
	imagepng( $my_img , "Images/imagen.png");
    $image = file_get_contents("Images/imagen.png");
    $mime = mime_content_type ("Images/imagen.png");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});

$app->run();