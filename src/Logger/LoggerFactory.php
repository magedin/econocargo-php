<?php

declare(strict_types=1);

namespace EconoCargo\Logger;

use DI\DependencyException;
use DI\NotFoundException;
use EconoCargo\Framework\ObjectManager;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Log\LoggerInterface;

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
     *
     * @param ObjectManager $objectManager
     */
    public function __construct(
        ObjectManager $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param string      $name
     * @param string|null $filename
     *
     * @return LoggerInterface
     * @throws DependencyException
     * @throws NotFoundException
     */
    public function getLogger(string $name, string $filename = null)
    {
        /** @var LoggerInterface $logger */
        $logger = $this->objectManager->create(LoggerInterface::class, ['name' => $name]);

        if ($filename) {
            $handler = new StreamHandler(
                $filename,
                Logger::DEBUG
            );
            $logger->pushHandler($handler);
        }

        return $logger;
    }
}
