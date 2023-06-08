<?php 
    namespace App;
    use App\UnitOfWork;
    require_once 'H:\xampp\htdocs\tsaruk\DAL\EntityManager.php';
        $UoW = new UnitOfWork($entityManager);
    return $UoW;