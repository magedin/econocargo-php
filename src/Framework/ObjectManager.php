<?php

declare(strict_types=1);

namespace EconoCargo\Framework;

use DI\DependencyException;
use DI\NotFoundException;
use EconoCargo\ApiFactory;

/**
 * Class ObjectManager
 */
class ObjectManager
{
    /**
     * @var array
     */
    private static $resolvedObjects = [];

    /**
     * @param string $class
     * @param array  $parameters
     *
     * @return mixed
     * @throws DependencyException
     * @throws NotFoundException
     */
    public static function create(string $class, array $parameters = [])
    {
        return DI\ContainerRepository::getInstance(ApiFactory::$config)->make($class, $parameters);
    }

    /**
     * @param string $class
     * @param array  $parameters
     *
     * @return mixed
     * @throws DependencyException
     * @throws NotFoundException
     */
    public static function get(string $class, array $parameters = [])
    {
        if (!isset(self::$resolvedObjects[$class])) {
            self::$resolvedObjects[$class] = self::create($class, $parameters);
        }

        return self::$resolvedObjects[$class];
    }
}
