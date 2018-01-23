<?php

    $loader = require __DIR__ . '/vendor/autoload.php';

    use LojaAgua\entidades\Usuario;
    use LojaAgua\entidades\Pedido;
    use LojaAgua\persistencia\UsuarioDAO;
    use LojaAgua\persistencia\PedidoDAO;

    $app = new \Slim\Slim();

    $app->get('/', function(){
        echo json_encode([
            "api" => "Venda de Agua",
            "version" => "1.0.0"
        ]);
    });

    $app->get('/test(/)', function(){
        echo "test";
    });

    $app->run();

    /*$user = new Usuario(7,"Malrloscaval@gmail.com","9555","Rua D");
    $dao = new UsuarioDAO();
    $dao->insert($user);

    $time = new DateTime("now");
    $pedido = new Pedido(0,$time,$user,array());
    $dao2 = new PedidoDAO();
    $dao2->insert($pedido);*/
   
?>