<?php

declare(strict_types = 1);

namespace EconoCargo\Config;

use EconoCargo\Framework\Exception\WrongDataTypeException;

/**
 * Class Service
 */
class Service implements ConfigInterface
{
    /**
     * @var array
     */
    private $validProtocols = [
        'http', 'https'
    ];

    /**
     * @var string
     */
    private $protocol = 'http';

    /**
     * @var string
     */
    private $defaultHost = '52.67.21.41';

    /**
     * @var string
     */
    private $defaultPort = '80';

    /**
     * @var string
     */
    private $host = null;

    /**
     * @var string
     */
    private $port = null;

    /**
     * @return string
     */
    public function getProtocol()
    {
        return (string) $this->protocol;
    }

    /**
     * @param string $protocol
     *
     * @return $this
     *
     * @throws WrongDataTypeException
     */
    public function setProtocol($protocol)
    {
        $protocol = trim(strtolower($protocol));

        if (!$this->validateProtocol($protocol)) {
            throw new WrongDataTypeException('Invalid protocol provided.');
        }

        $this->protocol = $protocol;

        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->getHostname();
    }

    /**
     * @return string
     */
    public function getHostname()
    {
        if (empty($this->host)) {
            return $this->defaultHost;
        }

        return (string) $this->normalizeHostname($this->host);
    }

    /**
     * @return string
     */
    public function getPort()
    {
        if ($this->port) {
            return $this->port;
        }

        return $this->defaultPort;
    }

    /**
     * @param string $host
     *
     * @return $this
     *
     * @throws WrongDataTypeException
     */
    public function setHostname(string $host)
    {
        if (!$this->validateHostname($host)) {
            throw new WrongDataTypeException('Invalid hostname format provided.');
        }

        $this->host = $this->normalizeHostname($host);

        return $this;
    }

    /**
     * @param string $host
     *
     * @return bool
     */
    private function validateHostname($host)
    {
        $host = $this->normalizeHostname($host);

        if (empty($host)) {
            return false;
        }

        return true;
    }

    /**
     * @param string $host
     *
     * @return string
     */
    private function normalizeHostname($host)
    {
        $host = trim($host);
        $host = strtolower($host);

        return $host;
    }

    /**
     * @param string $protocol
     *
     * @return bool
     */
    private function validateProtocol($protocol)
    {
        $protocol = strtolower($protocol);

        if (empty($protocol)) {
            return false;
        }

        if (!in_array($protocol, $this->validProtocols)) {
            return false;
        }

        return true;
    }
}
