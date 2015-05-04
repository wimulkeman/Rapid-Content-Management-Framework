<?php
namespace Bearwulf\RCMF\DataLayer;

use Doctrine\ORM\Tools\Setup,
    Doctrine\ORM\EntityManager,
    Symfony\Component\Yaml\Yaml;

/**
 * Class DataLayer
 * @package Bearwulf\RCMF\DataLayer
 */
class DataLayer
{
    /**
     * @var
     */
    private $entityManager;

    /**
     * @throws \Doctrine\ORM\ORMException
     */
    public function __construct()
    {
        $entityPaths = $this->getEntityDirectories();
        $isDevMode = false;

        $yamlParser = new Yaml();
        $databaseConfig = $yamlParser->parse(CONFIG_DIR . '/database.yml');

        $config = Setup::createYAMLMetadataConfiguration($entityPaths, $isDevMode);
        $entityManager = EntityManager::create($databaseConfig, $config);

        $this->setEntityManager($entityManager);
    }

    /**
     * @return mixed
     */
    public function getEntityMananager()
    {
        return $this->entityManager;
    }

    /**
     * @param EntityManager $entityManager
     */
    private function setEntityManager(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return array
     */
    private function getEntityDirectories()
    {
        return array(__DIR__ . '/entity');
    }
}