<?php
$loader = require __DIR__ . '/vendor/autoload.php';

use LojaAgua\entidades\Usuario;
use LojaAgua\entidades\Pedido;
use LojaAgua\controlador\UsuarioController;
use LojaAgua\controlador\PedidoController;

$app = new \Slim\Slim ();

$usuarioCtrl = new UsuarioController();

$app->get ( '/', function () {
	echo json_encode ( [
			"api" => "Venda de Agua",
			"version" => "1.0.0"
	] );
} );


$app->get ( '/usuario(/(:id))', function ($id = null) use  ($usuarioCtrl){
echo json_encode($usuarioCtrl->get($id));
});

$app->post ( '/usuario(/)', function () use  ($usuarioCtrl){
	$app = \Slim\Slim::getInstance ();
	$json = json_decode ( $app->request ()->getBody ());
	echo json_encode ($usuarioCtrl->insert( $json ) );

} );

$app->put ( '/usuario(/)', function () {
echo "PUT\n";
} );

$app->delete ( '/usuario/:id', function () {
	echo "DELETE\n";
} );

$app->run ();

?>
