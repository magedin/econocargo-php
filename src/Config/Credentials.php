<?php

declare(strict_types=1);

namespace EconoCargo\Config;

/**
 * Class Credentials
 */
class Credentials implements ConfigInterface
{
    /**
     * @var string
     */
    private $token;

    /**
     * @return string
     */
    public function getToken(): string
    {
        return (string) $this->token;
    }

    /**
     * @param string $token
     *
     * @return $this
     */
    public function setToken(string $token): self
    {
        $this->token = $token;
        return $this;
    }
}
