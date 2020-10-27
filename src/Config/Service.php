<?php

declare(strict_types=1);

namespace EconoCargo\Config;

/**
 * Class Service
 */
class Service implements ConfigInterface
{
    /**
     * @var Service\TestingEnvironment
     */
    private $testingEnvironment;

    /**
     * @var Service\ProductionEnvironment
     */
    private $productionEnvironment;

    /**
     * @var bool
     */
    private $isTesting = false;

    public function __construct(
        Service\TestingEnvironment $testingEnvironment,
        Service\ProductionEnvironment $productionEnvironment
    ) {
        $this->testingEnvironment = $testingEnvironment;
        $this->productionEnvironment = $productionEnvironment;
    }

    /**
     * @return string
     */
    public function getProtocol()
    {
        return (string) $this->getEnvironment()->getProtocol();
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return (string) $this->getEnvironment()->getHost();
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return (int) $this->getEnvironment()->getPort();
    }

    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function isTesting(bool $flag = false): self
    {
        $this->isTesting = $flag;
        return $this;
    }

    /**
     * @return Service\EnvironmentInterface
     */
    private function getEnvironment(): Service\EnvironmentInterface
    {
        if (true === $this->isTesting) {
            return $this->testingEnvironment;
        }

        return $this->productionEnvironment;
    }
}
