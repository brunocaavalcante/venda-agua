<?php
 
    namespace LojaAgua\controlador;
    
    use  LojaAgua\persistencia\PedidoDao;
    use  LojaAgua\entidade\Pedido;
    
    abstract class PedidoController {
        // attr
        private $dao;
        public function __construct() {
        $this->setDao ( new PedidoDAO () );
        }
        // get and set
        public function getDao() {
            return $this->dao;
        }
        
        public function setDao($dao) {
            $this->dao = $dao;
        }
        // request
        public function get($id) {
            if ($id === null) {
                $data = array ();
                $result = $this->getDao ()->findAll ();
    
                foreach ( $result as $obj ) {
                    $data [] = $obj->toArray ();
                }
            } else {
                $obj = $this->getDao ()->findById ( $id );
                if ($obj != null) {
    
                    $data = $obj->toArray ();
                } else
                    $data = null;
            }
    
            return $data;
        }
        public function insert($json){}
        public function update($id, $json){}
        public function delete($id){}
    }
 ?>