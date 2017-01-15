<?php

namespace Tests\AppBundle\Repository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PropertiesRepositoryTest extends KernelTestCase
{
    /**\
     * @var \Doctrine\Orm\EntityManager
     */
    private $em;

    /**
     * {@inheritDoc}
     */
    protected function setUp()
    {
        self::bootKernel();

        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testSearchByCategoryName()
    {
        $criteria = ['location' => 'corn', 'nearBeach' => 1, 'sleeps' => 1];
        $properties = $this->em->getRepository('AppBundle:Properties')->search($criteria, 1, 8);
        $this->assertCount(2, $properties);

        $criteria = ['location' => 'corn', 'nearBeach' => 0, 'sleeps' => 1];
        $properties = $this->em->getRepository('AppBundle:Properties')->search($criteria, 1, 8);
        $this->assertCount(3, $properties);

        $criteria = ['location' => 'lorem ipsum', 'nearBeach' => 0, 'sleeps' => 1];
        $properties = $this->em->getRepository('AppBundle:Properties')->search($criteria, 1, 8);
        $this->assertCount(0, $properties);
    }

    /**
     * {@inheritDoc}
     */
    public function tearDown()
    {
        parent::tearDown();

        $this->em->close();
        $this->em = null;
    }
}