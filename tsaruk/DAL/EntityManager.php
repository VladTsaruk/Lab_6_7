<?php

    use Doctrine\DBAL\DriverManager;
    use Doctrine\ORM\Tools\Setup;
    use Doctrine\ORM\EntityManager;
    use Doctrine\ORM\ORMSetup;

    require_once 'H:\xampp\htdocs\tsaruk\vendor\autoload.php';
    
    // Путь к папке с сущностями
    $entityPath = array(__DIR__.'\Entity');
    $isDevMode = true;

    $config = ORMSetup::createAnnotationMetadataConfiguration($entityPath, $isDevMode);
    
    // Настройки подключения к базе данных
    $dbParams = DriverManager::getConnection(array(
        'driver'   => 'pdo_mysql',
        'host'     => 'localhost',
        'dbname'   => 'tsaruk',
        'user'     => 'root',
        'password' => '',
    ), $config);  
    
    // Конфигурация Doctrine ORM
    

    
    // Создание EntityManager
    $entityManager = new EntityManager($dbParams, $config);
