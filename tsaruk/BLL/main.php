<?php 
use App\KeyOrder;
use App\Zone; 
require_once('H:\xampp\htdocs\tsaruk\DAL\Entity\Zone.php');
require_once('H:\xampp\htdocs\tsaruk\DAL\Entity\Attraction.php');
require_once('H:\xampp\htdocs\tsaruk\DAL\Entity\KeyOrder.php');
require_once('H:\xampp\htdocs\tsaruk\DAL\Entity\Hero.php');
require_once('H:\xampp\htdocs\tsaruk\DAL\UnitOfWork.php');
require_once('H:\xampp\htdocs\tsaruk\DAL\UoW.php');
    function getAllZones(){
        global $UoW;
        $allZones = $UoW->getZoneRepository()->findAll();
        return $allZones;
    }
    function getAllHeroes(){
        global $UoW;
        $allZones = $UoW->getHeroRepository()->findAll();
        return $allZones;
    }
    function getAllAttractions(){
        global $UoW;
        $allAttr = $UoW->getAttractionRepository()->findAll();
        return $allAttr;
    }
    function deleteZone($id){
        global $UoW;
        $zone = $UoW->getZoneRepository()->find($id);
        $em = $UoW->getEM();
        $em->remove($zone);
        $em->flush();
        return "ok";
    }
    function createZone(){
        global $UoW;
       $zone = new Zone("New zone");
        if($zone){
            $UoW->getEM()->persist($zone);
            $UoW->getEM()->flush();
            return "Ok";
        }
        return "Not ok";
    }
    function updateZoneName($id, $newName){
        global $UoW;
        $zone = $UoW->getZoneRepository()->find($id);
        $zone->setName($newName);
        $UoW->getEM()->flush();
        return "ok";
    }
    function orderHero($id){
        global $UoW;
        $hero = $UoW->getHeroRepository()->find($id);
        $hero->makeOrder();
        $UoW->getEM()->flush();
        return "You've ordered a hero " .  $hero->getName();
    }
    function freeHero($id){
        global $UoW;
        $hero = $UoW->getHeroRepository()->find($id);
        $hero->makeFree();
        $UoW->getEM()->flush();
        return "The hero " .  $hero->getName() . " is free now";
    }
    function makeKeyOrder($totalPrice){
        global $UoW;
        $newOrder = new KeyOrder($totalPrice);
        if($newOrder){
            $UoW->getEM()->persist($newOrder);
            $UoW->getEM()->flush();
            return "we will contact you soon...";
        }
        return "exception with order..";
    }