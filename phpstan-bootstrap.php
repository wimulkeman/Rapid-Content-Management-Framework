<?php

// This file is used to help PHPStan understand classes that it can't find
// but that we know exist in our dependencies

namespace Doctrine\ORM\Tools {
    if (!class_exists('Setup')) {
        class Setup {
            public static function createYAMLMetadataConfiguration(array $paths, bool $isDevMode): \Doctrine\ORM\Configuration {
                return new \Doctrine\ORM\Configuration();
            }
        }
    }
}

namespace Doctrine\ORM {
    if (!class_exists('\Doctrine\ORM\EntityManager')) {
        class EntityManager {
            public static function create(array $conn, \Doctrine\ORM\Configuration $config): EntityManager {
                return new EntityManager();
            }
        }
    }

    if (!class_exists('\Doctrine\ORM\Configuration')) {
        class Configuration {}
    }
}
