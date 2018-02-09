<?php 
    namespace LojaAgua\persistencia;

    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\Tools\Setup;

    class AbstractDAO{

        public $entityManager;
        private $entityPath;

        public function __construct($entityPath){
            
            $this->entityPath = $entityPath;
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
        public function delete($user){            
            $this->entityManager->remove($user);
            $this->entityManager->flush();
        }
        public function findById($id){
                return $this->entityManager->find($this->entityPath,$id);
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