<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello', function (Request $request, Response $response, $next) {
    $image = file_get_contents("Images/lel.jpeg");
    $mime = mime_content_type ("Images/lel.jpeg");
    $response->write($image);
    return $response->withHeader('Content-Type',$mime);
});
$app->get('/hello2/{name}', function (Request $request, Response $response, $next) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hola $name");   
    return $response->withHeader('Content-Type','text/html');
});
$app->get('/hello3', function (Request $request, Response $response, $next) {  
	$arr = array('a' => 1 , 'b' => 2 );
	echo json_encode($arr);
	return $response -> withHeader('Content-Type','application/json');
});
$app->get('/hello4', function (Request $request, Response $response, $next) {  
	$md5 = md5(rand(0,999));
	$pass = substr($md5, 10, 5);
	$width = 100;
	$height = 20;
	$image = ImageCreate($width,$height);
	$white = imagecolorallocate($image, 255, 255, 255);
	$black = imagecolorallocate($image, 0, 0, 0);
	$grey = imagecolorallocate($image, 204, 204, 204);
	imagefill($image, 0, 0, $black);
	imagestring($image, 3, 30, 3, $pass, $white);
    ImageRectangle($image,0,0,$width-1,$height-1,$grey); 
    imageline($image, 0, $height/2, $width, $height/2, $grey); 
    imageline($image, $width/2, 0, $width/2, $height, $grey);
    header("Content-Type: image/jpeg");
    imagejpeg($image);
    imagedestroy($image);	
});
$app->get('/hello5/{name}', function (Request $request, Response $response, $next) {  
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

