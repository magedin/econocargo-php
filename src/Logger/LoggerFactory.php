<?php

declare(strict_types = 1);

namespace EconoCargo\Logger;

use EconoCargo\Framework\ObjectManager;

/**
 * Class LoggerFactory
 */
class LoggerFactory
{
    /**
     * @var ObjectManager
     */
    private $objectManager;

    /**
     * LoggerFactory constructor.
     * @param ObjectManager $objectManager
     */
    public function __construct(
        ObjectManager $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param string $name
     *
     * @return \Psr\Log\LoggerInterface
     *
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getLogger($name, $filename = null)
    {
        /** @var \Psr\Log\LoggerInterface $logger */
        $logger = $this->objectManager->create(\Psr\Log\LoggerInterface::class, ['name' => $name]);

        if ($filename) {
            $handler = new \Monolog\Handler\StreamHandler(
                $filename,
                \Monolog\Logger::DEBUG
            );
            $logger->pushHandler($handler);
        }

        return $logger;
    }
}
