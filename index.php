<?php

    $loader = require __DIR__ . '/vendor/autoload.php';

    use LojaAgua\entidades\Usuario;
    use LojaAgua\persistencia\UsuarioDAO;

    $user = new Usuario(1,"carloscavalcantedsilva@gmail.com","2363","Rua B");
    $dao = new UsuarioDAO();

    $dao->insert($user);
   
?>