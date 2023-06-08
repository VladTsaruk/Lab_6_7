<?php 
    namespace App;

    use Doctrine\ORM\Mapping as ORM;
    /**
    *@ORM\Entity()
    *@ORM\Table(name="zone_attractions")
    */
    class ZoneAttraction{
        
        /** 
        *@ORM\Id()
        *@ORM\GeneratedValue()
        *@ORM\Column(name="id", type="integer", nullable=false)
        */
        private $id;
        
        /**
        *@ORM\ManyToOne(targetEntity="Zone", inversedBy="zoneAttractions", cascade={"persist"})
        *@ORM\JoinColumn(name="zone_id", referencedColumnName="id", nullable=false)
        */
        private $zone;
        
        /**
        *@ORM\ManyToOne(targetEntity="Attraction", inversedBy="zoneAttractions")
        *@ORM\JoinColumn(name="attraction_id", referencedColumnName="id", nullable=false)
        */
        private $attraction;
        public function __construct(){
            
        }
        public function setId($id) {
            $this->id = $id;
        }
        public function setZone($zone){
            $this->zone = $zone;
        }
        public function setAttraction($attraction){
            $this->attraction = $attraction;
        }
        
}
