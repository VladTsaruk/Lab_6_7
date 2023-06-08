<?php 
use PHPUnit\Framework\TestCase;
include 'H:\xampp\htdocs\tsaruk\DAL\Entity\Zone.php';
use App\Zone;
use App\Hero;
class MyTest extends TestCase
{
    protected $UoW;
    protected $zoneRepository;
    protected $heroRepository;
    protected $attractionRepository;
    protected $entityManager;

    protected function setUp(): void
    {
        $this->UoW = $this->getMockBuilder(UnitOfWork::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->zoneRepository = $this->getMockBuilder(ZoneRepository::class)
            ->getMock();

        $this->heroRepository = $this->getMockBuilder(HeroRepository::class)
            ->getMock();

        $this->attractionRepository = $this->getMockBuilder(AttractionRepository::class)
            ->getMock();

        $this->entityManager = $this->getMockBuilder(EntityManager::class)
            ->getMock();
    }

    public function testGetAllZones()
    {
        // Arrange
        $allZones = ['Zone1', 'Zone2'];
        $this->zoneRepository->expects($this->once())
            ->willReturn($allZones);

        // Act
        $result = getAllZones();

        // Assert
        $this->assertEquals($allZones, $result);
    }

    public function testGetAllHeroes()
    {
        // Arrange
        $allHeroes = ['Hero1', 'Hero2'];
        $this->heroRepository->expects($this->once())
            ->method('findAll')
            ->willReturn($allHeroes);

        // Act
        $result = getAllHeroes();

        // Assert
        $this->assertEquals($allHeroes, $result);
    }

    public function testGetAllAttractions()
    {
        // Arrange
        $allAttractions = ['Attraction1', 'Attraction2'];
        $this->attractionRepository->expects($this->once())
            ->method('findAll')
            ->willReturn($allAttractions);

        // Act
        $result = getAllAttractions();

        // Assert
        $this->assertEquals($allAttractions, $result);
    }

    public function testDeleteZone()
    {
        // Arrange
        $zoneId = 1;
        $zone = new Zone("Test Zone");
        $this->zoneRepository->expects($this->once())
            ->method('find')
            ->with($zoneId)
            ->willReturn($zone);

        $this->entityManager->expects($this->once())
            ->method('remove')
            ->with($zone);
        $this->entityManager->expects($this->once())
            ->method('flush');

        // Act
        deleteZone($zoneId);

        // Assert
        $this->assertInstanceOf(Zone::class, $zone);
        $this->assertEquals("Test Zone", $zone->getName());
    }

    public function testCreateZone()
    {
        // Arrange
        $zone = new Zone("New zone");
        $this->zoneRepository->expects($this->once())
            ->method('persist')
            ->with($zone);
        $this->entityManager->expects($this->once())
            ->method('flush');

        // Act
        $result = createZone();

        // Assert
        $this->assertEquals("Ok", $result);
    }

    public function testUpdateZoneName()
    {
        // Arrange
        $zoneId = 1;
        $newName = "Updated Zone";
        $zone = new Zone("Test Zone");
        $this->zoneRepository->expects($this->once())
            ->method('find')
            ->with($zoneId)
            ->willReturn($zone);

        $this->entityManager->expects($this->once())
            ->method('flush');

        // Act
        $result = updateZoneName($zoneId, $newName);

        // Assert
        $this->assertEquals("ok", $result);
        $this->assertEquals($newName, $zone->getName());
    }

    public function testOrderHero()
    {
        // Arrange
        $heroId = 1;
        $hero = new Hero("Test Hero");
        $this->heroRepository->expects($this->once())
            ->method('find')
            ->with($heroId)
            ->willReturn($hero);

        $this->entityManager->expects($this->once())
            ->method('flush');

        // Act
        $result = orderHero($heroId);

        // Assert
        $this->assertEquals("You've ordered a hero Test Hero", $result);
        $this->assertTrue($hero->isOrdered());
    }

    public function testFreeHero()
    {
        // Arrange
        $heroId = 1;
        $hero = new Hero("Test Hero");
        $this->heroRepository->expects($this->once())
            ->method('find')
            ->with($heroId)
            ->willReturn($hero);

        $this->entityManager->expects($this->once())
            ->method('flush');

        // Act
        $result = freeHero($heroId);

        // Assert
        $this->assertEquals("The hero Test Hero is free now", $result);
        
    }
}