<?php

namespace EconoCargo\Config\Service;

/**
 * Interface EnvironmentInterface
 */
interface EnvironmentInterface
{
    /**
     * @return string
     */
    public function getProtocol() : string;

    /**
     * @return string
     */
    public function getHost() : string;

    /**
     * @return int
     */
    public function getPort() : int;
}
