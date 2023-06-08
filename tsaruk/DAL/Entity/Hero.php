<?php 
    namespace App;  

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    use App\Attractions;
use Exception;

    /**
    * @ORM\Entity()
    * @ORM\Table(name="heroes")
    */
    class Hero
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
        private $availability;

        
        
        public function __construct($name) {
            $this->name =  $name;
            $this->availability = 1;
        }
        public function getName(){
            return $this->name;
        }
        public function getAvl()
        {
            return $this->availability;
        }
        public function isOrdered(){
            return $this->availability;
        }
        public function makeOrder(){
            if ($this->availability == 0) {
                throw new Exception("This hero is already taken");
            }
            $this->availability = 0;
            
        }
        public function makeFree(){
            if ($this->availability == 1) {
                throw new Exception("This hero is already free");

            }
            $this->availability = 1;
            return "The hero " .  $this->getName() . " is free now";
        }
    }
