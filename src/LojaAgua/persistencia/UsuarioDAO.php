<?php 
    namespace LojaAgua\persistencia;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;
    use LojaAgua\entidades\Usuario;
    use LojaAgua\persistencia\AbstractDAO;

    class UsuarioDAO extends AbstractDAO{

        public function __construct(){
            parent::__construct('LojaAgua\entidades\Usuario');
        }

    }
?>