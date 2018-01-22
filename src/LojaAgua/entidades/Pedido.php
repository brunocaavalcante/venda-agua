<?php

    namespace LojaAgua\entidades;
    /**
    * @Entity
    * @Table(name="pedido")
    */

    class Pedido{

        /**
        *	@var integer @Id
        *      @Column(name="id", type="integer")
        *      @GeneratedValue(strategy="AUTO")
        */
        private $id;
        /**
         * @Column(type="datetime")
         * @var DateTime
         */
        private $hora;
        /**
         * @ManyToOne(targetEntity="Usuario",cascade={"persist"})
         * @JoinColumn(name="usuario_id", referencedColumnName="id")
         */
        private $usuario;
        /**
        * @OneToMany(targetEntity="Item", mappedBy="pedido",cascade={"persist","remove"})
        **/
        private $item;

        public function __construct($id = 0,$hora= "" ,$usuario= "" ,$item= 0.0){
        $this->id = $id;
        $this->hora = $hora;
        $this->usuario = $usuario;
        $this->item = $item;
        
        }
        
        public static function construct($array){
        $obj = new Pedido();
        $obj->setId( $array['id']);
        $obj->setHora( $array['hora']);
        $obj->setUsuario( $array['usuario']);
        $obj->setItem( $array['item']);
        return $obj;
        
        }
        
        public function getId(){
        return $this->id;
        }
        
        public function setId($id){
         $this->id=$id;
        }
        
        public function getHora(){
        return $this->hora;
        }
        
        public function setHora($hora){
         $this->hora=$hora;
        }
        
        public function getUsuario(){
        return $this->usuario;
        }
        
        public function setUsuario($usuario){
         $this->usuario=$usuario;
        }
        
        public function getItem(){
        return $this->item;
        }
        
        public function setItem($item){
         $this->item=$item;
        }
        public function equals($object){
        if($object instanceof Pedido){
        
        if($this->id!=$object->id){
        return false;
        
        }
        
        if($this->hora!=$object->hora){
        return false;
        
        }
        
        if($this->usuario!=$object->usuario){
        return false;
        
        }
        
        if($this->item!=$object->item){
        return false;
        
        }
        
        return true;
        
        }
        else{
        return false;
        }
        
        }
        public function toString(){
        
         return "  [id:" .$this->id. "]  [hora:" .$this->hora. "]  [usuario:" .$this->usuario. "]  [item:" .$this->item. "]  " ;
        }
        
        }
?>