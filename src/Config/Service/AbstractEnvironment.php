<?php

declare(strict_types=1);

namespace EconoCargo\Config\Service;

/**
 * Class AbstractEnvironment
 */
abstract class AbstractEnvironment implements EnvironmentInterface
{
    /**
     * @var string
     */
    protected $protocol;

    /**
     * @var string
     */
    protected $host;

    /**
     * @var int
     */
    protected $port;

    /**
     * @inheritDoc
     */
    public function getProtocol() : string
    {
        return (string) $this->protocol;
    }

    /**
     * @inheritDoc
     */
    public function getHost() : string
    {
        return (string) $this->host;
    }

    /**
     * @inheritDoc
     */
    public function getPort() : int
    {
        return (int) $this->port;
    }
}
