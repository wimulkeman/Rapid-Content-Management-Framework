<?php

/*
 * This file is part of the Rapid Content Management Framework.
 *
 * (c) Wim Ulkeman <wim@wimulkeman.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Bearwulf\RCMF\DataLayer;

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\ORMSetup;
use Symfony\Component\Yaml\Yaml;

/**
 * Class DataLayer
 */
class DataLayer
{
    /**
     * @var EntityManager
     */
    private EntityManager $entityManager;

    /**
     * @throws ORMException
     * @throws \Exception
     */
    public function __construct()
    {
        $entityPaths = $this->getEntityDirectories();
        $isDevMode = false;

        $configContent = file_get_contents(CONFIG_DIR.'/database.yml');
        if (false === $configContent) {
            throw new \RuntimeException('Could not read database configuration file');
        }
        $databaseConfig = Yaml::parse($configContent);

        // Create a simple "default" Doctrine ORM configuration for Attributes
        $config = ORMSetup::createAttributeMetadataConfiguration(
            $entityPaths,
            $isDevMode,
        );

        // Configuring the database connection
        $connection = DriverManager::getConnection($databaseConfig, $config);

        // Creating the EntityManager
        $entityManager = new EntityManager($connection, $config);

        $this->setEntityManager($entityManager);
    }

    /**
     * @return EntityManager
     */
    public function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }

    /**
     * @param EntityManager $entityManager
     *
     * @return void
     */
    private function setEntityManager(EntityManager $entityManager): void
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return array<int, string>
     */
    private function getEntityDirectories(): array
    {
        return [__DIR__.'/Entity'];
    }
}
