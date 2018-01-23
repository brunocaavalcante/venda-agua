<?php
    namespace LojaAgua\persistencia;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;
    use LojaAgua\entidades\Pedido;
    use LojaAgua\entidades\Usuario;
    use LojaAgua\persistencia\AbstractDAO;

    class PedidoDAO extends AbstractDAO{

        public function __construct(){
            parent::__construct('LojaAgua\entidades\Pedido');
        }

        public function insert(Pedido $obj){
            
            $usuarioPersistido = $this->entityManager->find('LojaAgua\entidades\Usuario', $obj->getUsuario()->getId());
            $obj->setUsuario($usuarioPersistido);

            parent::insert($obj);
        }
    }

?>