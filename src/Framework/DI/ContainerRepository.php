<?php

namespace EconoCargo\Framework\DI;

use DI\Container;
use DI\ContainerBuilder;
use EconoCargo\Framework\Exception\ExceptionInterface;

/**
 * Class ContainerRepository
 */
class ContainerRepository
{
    /**
     * @var ContainerBuilder
     */
    private static $instanceBuilder;

    /**
     * @var Container
     */
    private static $instance;

    /**
     * @var array
     */
    private static $config = [
        'definitions' => null
    ];

    /**
     * Create a reusable instance.
     *
     * @param array $config
     *
     * @return Container
     * @throws ExceptionInterface
     */
    public static function getInstance(array $config = [])
    {
        if (!self::$instance) {
            self::buildInstance($config);
        }

        return self::$instance;
    }

    /**
     * Always create a new instance.
     *
     * @param array $config
     *
     * @return Container
     * @throws ExceptionInterface
     */
    public static function createInstance(array $config = [])
    {
        self::buildInstance($config);
        return self::$instance;
    }

    /**
     * @param array $config
     *
     * @throws ExceptionInterface
     */
    private static function buildInstance(array $config = [])
    {
        self::$config = array_merge(self::$config, $config);
        self::$instanceBuilder = new ContainerBuilder();

        if (!empty(self::getDefinitions()) && realpath(self::getDefinitions())) {
            self::$instanceBuilder->addDefinitions(self::getDefinitions());
        }

        try {
            self::$instance = self::$instanceBuilder->build();
        } catch (\Exception $e) {
            /** @todo Throw new \EconoCargo\Framework\Exception\ExceptionInterface instance. */
        }
    }

    /**
     * @return string|null
     */
    private static function getDefinitions()
    {
        return self::$config['definitions'];
    }
}
