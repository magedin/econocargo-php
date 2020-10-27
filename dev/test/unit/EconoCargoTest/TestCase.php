<?php

declare(strict_types = 1);

namespace EconoCargoTest;

/**
 * Class TestCase
 */
abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @param string $objectClass
     * @param array  $parameters
     *
     * @return object|null
     */
    protected function createObject(string $objectClass, array $parameters = [])
    {
        $result = null;
        $config = [
            'definitions' => __DIR__ . '/../../../../src/app/config.php'
        ];
        
        try {
            $container = \EconoCargo\Framework\DI\ContainerRepository::getInstance($config);
            $result = $container->make($objectClass, $parameters);
        } catch (\DI\DependencyException $e) {
        } catch (\DI\NotFoundException $e) {
        } catch (\Exception $e) {
        }
        
        return $result;
    }
}
