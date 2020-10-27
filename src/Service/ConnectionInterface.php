<?php

declare(strict_types=1);

namespace EconoCargo\Service;

use EconoCargo\Framework\Http\Response;

/**
 * Interface ConnectionInterface
 */
interface ConnectionInterface
{
    /**
     * @var string
     */
    const METHOD_POST = 'POST';

    /**
     * @var string
     */
    const METHOD_GET = 'GET';

    /**
     * @param string $method
     * @param string $resourcePath
     * @param array  $data
     * @param array  $config
     * @return Response\ResponseInterface
     */
    public function request($method, $resourcePath, array $data = [], array $config = []);

    /**
     * @param string $resourcePath
     * @param array  $data
     * @param array  $config
     * @return Response\ResponseInterface
     */
    public function post($resourcePath, array $data = [], array $config = []);

    /**
     * @param string $resourcePath
     * @param array  $data
     * @param array  $config
     * @return Response\ResponseInterface
     */
    public function get($resourcePath, array $data = [], array $config = []);
}
