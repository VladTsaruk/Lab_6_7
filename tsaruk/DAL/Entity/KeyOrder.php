<?php 
    namespace App;  

    use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\ORM\Mapping as ORM;
    use App\Attractions;
    /**
    * @ORM\Entity()
    * @ORM\Table(name="keyorder")
    */
    class KeyOrder
    {
        /**
        * @ORM\Id()
        * @ORM\GeneratedValue()
        * @ORM\Column(type="integer")
        */
        private $id;

         /**
        * @ORM\Column(type="integer")
        */
        private $totalPrice;
       
        public function __construct($totalPrice){
            $this->totalPrice = $totalPrice;
        }
        public function getTotalPrice(){
            return $this->totalPrice;
        }
    }
