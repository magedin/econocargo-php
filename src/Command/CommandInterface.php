<?php

declare(strict_types=1);

namespace EconoCargo\Command;

/**
 * Interface CommandInterface
 * @package EconoCargo\Command
 */
interface CommandInterface
{
    /**
     * @var string
     */
    public const REQUEST_METHOD_GET = 'GET';

    /**
     * @var string
     */
    public const REQUEST_METHOD_POST = 'POST';

    /**
     * @var string
     */
    public const REQUEST_METHOD_PUT = 'PUT';

    /**
     * @var string
     */
    public const REQUEST_METHOD_HEAD = 'HEAD';

    /**
     * @return string
     */
    public function getUrlPath();

    /**
     * @return string
     */
    public function getRequestMethod();

    /**
     * @param array $optionalConfig
     * @return $this
     */
    public function setOptionalConfig(array $optionalConfig = []);

    /**
     * @return array
     */
    public function toArray();

    /**
     * @return array
     */
    public function toJson();

    /**
     * @return mixed
     */
    public function execute();
}
