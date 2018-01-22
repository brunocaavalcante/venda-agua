<?php 
    namespace LojaAgua\persistencia;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;
    use LojaAgua\entidades\Usuario;

    class UsuarioDAO{

        private $entityManager;
        private $entityPath ='LojaAgua\entidades\Usuario';

        public function __construct(){
            
            $this->entityManager = $this->createEntityManager();
        }

        public function createEntityManager(){

            $path = array(
                'LojaAgua/entidades'
            );
        
            $devMode = true;
        
            $config = Setup::createAnnotationMetadataConfiguration($path, $devMode);
        
            $connectionOptions = array(
                'dbname' => 'vendaagua',
                'user' => 'root',
                'password' => '',
                'host' => 'localhost',
                'driver' => 'pdo_mysql'
            );
        
          return  $entityManager = EntityManager::create($connectionOptions, $config);
        }

        public function insert($user){
            $this->entityManager->persist($user);
            $this->entityManager->flush();
        }
        public function update($user){
            $this->entityManager->merge($user);
            $this->entityManager->flush();
        }
        public function delete($id){            
            $this->entityManager->remove($user);
            $this->entityManager->flush();
        }
        public function findById($id){
                return $entityManager->find('LojaAgua\entidades\Usuario' ,1);
        }
        public function findAll(){
            $collection = $this->entityManager->getRepository($this->entityPath)->findAll();

            $data = array();
            foreach($collection as $obj){
                $data[ ] = $obj; 
            }
            return $data;
        }

    }
?>