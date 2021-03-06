<?php

declare(strict_types=1);

namespace EconoCargo;

/**
 * Class Config
 *
 * @package EconoCargo
 */
class ConfigPool
{
    /**
     * @var Config\Credentials
     */
    private $credentials;

    /**
     * @var Config\Service
     */
    private $service;

    /**
     * @var Config\Debugger
     */
    private $debugger;

    public function __construct(
        Config\Credentials $credentials,
        Config\Service $service,
        Config\Debugger $debugger
    ) {
        $this->credentials = $credentials;
        $this->service = $service;
        $this->debugger = $debugger;
    }

    /**
     * @return Config\Credentials
     */
    public function credentials(): Config\Credentials
    {
        return $this->credentials;
    }

    /**
     * @return Config\Service
     */
    public function service(): Config\Service
    {
        return $this->service;
    }

    /**
     * @return Config\Debugger
     */
    public function debugger(): Config\Debugger
    {
        return $this->debugger;
    }
}
