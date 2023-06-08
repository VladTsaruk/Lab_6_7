<?php
    namespace App;

use Doctrine\ORM\EntityManager;
    
    class UnitOfWork
    {
        private EntityManager $entityManager;
    
        public function __construct(EntityManager $entityManager)
        {
            $this->entityManager = $entityManager;
        }
        public function getZoneRepository(){
            return $this->entityManager->getRepository(Zone::class);
        }
        public function getAttractionRepository(){
            return $this->entityManager->getRepository(Attraction::class);
        }
        public function getHeroRepository(){
            return $this->entityManager->getRepository(Hero::class);
        }
        
        
       public function getEM(){
        return $this->entityManager;
       }
    
    }