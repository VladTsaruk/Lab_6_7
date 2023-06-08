<?php 
    namespace App;  

    use Doctrine\ORM\Mapping as ORM;
    /**
    * @ORM\Entity()
    * @ORM\Table(name="attractions")
    */
    class Attraction
    {
        /**
        * @ORM\Id()
        * @ORM\GeneratedValue()
        * @ORM\Column(type="integer")
        */
        private $id;

        /**
        * @ORM\Column(type="string")
        */
        private $name;

        /**
        * @ORM\Column(type="integer")
        */
        private $price;
        
        
        public function __construct($name) {
            $this->name =  $name;
        }
        public function getName(){
            return $this->name;
        }
        public function getId(){
            return $this->id;
        }
        public function getPrice(){
            return $this->price;
        }
    }
