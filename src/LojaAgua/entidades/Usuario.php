<?php

     namespace LojaAgua\entidades;
     /**
      * @Entity
      *@Table(name="usuario")
      */
     class Usuario{
        /**
        *@var integer @Id
        *@Column(name="id", type="integer")
        *@GeneratedValue(strategy="AUTO")
        */
        private $id;
        /**
        *
        * @var string @Column(type="string", length=255)
        */
        private $email;
        /**
        *
        * @var string @Column(type="string", length=255)
        */
        private $endereco;
        /**
        *
        * @var string @Column(type="string", length=255)
        */
        private $senha;
        public function __construct($id = 0,$email= "" ,$endereco= "" ,$senha= "" ){
        $this->id = $id;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->senha = $senha;
        
        }
        
        public static function construct($array){
        $obj = new Usuario();
        $obj->setId( $array['id']);
        $obj->setEmail( $array['email']);
        $obj->setEndereco( $array['endereco']);
        $obj->setSenha( $array['senha']);
        return $obj;
        
        }
        
        public function getId(){
        return $this->id;
        }
        
        public function setId($id){
         $this->id=$id;
        }
        
        public function getEmail(){
        return $this->email;
        }
        
        public function setEmail($email){
         $this->email=$email;
        }
        
        public function getEndereco(){
        return $this->endereco;
        }
        
        public function setEndereco($endereco){
         $this->endereco=$endereco;
        }
        
        public function getSenha(){
        return $this->senha;
        }
        
        public function setSenha($senha){
         $this->senha=$senha;
        }
        public function equals($object){
        if($object instanceof Usuario){
        
        if($this->id!=$object->id){
        return false;
        
        }
        
        if($this->email!=$object->email){
        return false;
        
        }
        
        if($this->endereco!=$object->endereco){
        return false;
        
        }
        
        if($this->senha!=$object->senha){
        return false;
        
        }
        
        return true;
        
        }
        else{
        return false;
        }
        
        }
        public function toString(){
        
         return "  [id:" .$this->id. "]  [email:" .$this->email. "]  [endereco:" .$this->endereco. "]  [senha:" .$this->senha. "]  " ;
        }
        
        }    

?>