<?php

declare(strict_types = 1);

namespace EconoCargo;

use DI\Container;
use DI\DependencyException;
use DI\NotFoundException;
use EconoCargo\Framework\DI\ContainerRepository;
use EconoCargo\Framework\Exception\ExceptionInterface;

/**
 * Class ApiFactory
 */
class ApiFactory
{

    /**
     * @var Container
     */
    private static $container;

    /**
     * @var array
     */
    public static $config = [
        'definitions' => DIR_DI_CONFIG
    ];

    /**
     * @var array
     */
    private static $customConfig = [];

    /**
     * @param string|null $token
     * @param array       $config
     *
     * @return ApiInterface
     * @throws DependencyException
     * @throws NotFoundException
     */
    public static function create(string $token = null, array $config = [])
    {
        if (!empty($config)) {
            /** If there's a customized configuration the application can load it. */
            self::$customConfig = (array) $config;
        }

        self::setupContainer();

        $api = self::createApiInstance($token);

        self::$container->set(Api::class, $api);

        return $api;
    }

    /**
     * @param string|null $token
     *
     * @return ApiInterface
     * @throws DependencyException
     * @throws NotFoundException
     */
    private static function createApiInstance(string $token = null)
    {
        return self::$container->make(ApiInterface::class, [
            'token' => $token,
        ]);
    }

    /**
     * Setup the container.
     *
     * @throws ExceptionInterface
     */
    private static function setupContainer()
    {
        self::$container = ContainerRepository::getInstance(self::getConfig());
    }

    /**
     * @return array
     */
    private static function getConfig()
    {
        return array_merge_recursive(self::$config, self::$customConfig);
    }
}
