<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
//Respuesta con Imagen
$app = new \Slim\App;
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
	//header( "Content-type: image/png" );
	imagepng( $my_img , "Images/imagen.png");
    $image = file_get_contents("Images/imagen.png");
    $mime = mime_content_type ("Images/imagen.png");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
	/*imagecolordeallocate( $line_color );
	imagecolordeallocate( $text_color );
	imagecolordeallocate( $background );
	imagedestroy( $my_img );	*/
});

$app->run();

