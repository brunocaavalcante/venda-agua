<?php
 
    namespace LojaAgua\controlador;
    
    use  LojaAgua\persistencia\UsuarioDAO;
    use  LojaAgua\entidades\Usuario;
    
    class UsuarioController {
        // attr
        private $dao;
        public function __construct() {
        $this->setDao ( new UsuarioDAO () );
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
                    $data = [];
            }
    
            return $data;
        }
        public function insert($json){
        $user = new Usuario($json->id,$json->email,$json->senha,$json->endereco);
        $this->getDao ()->insert ( $user );
        return ["mensagem"=>"Usuario inserido com sucesso"];
    }
        public function update($id, $json){}
        public function delete($id){}
    }
?>