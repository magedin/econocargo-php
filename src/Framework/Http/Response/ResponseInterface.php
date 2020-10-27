<?php

declare(strict_types=1);

namespace EconoCargo\Framework\Http\Response;

/**
 * Interface ResponseInterface
 */
interface ResponseInterface
{
    /**
     * @return string|array
     */
    public function getBody();

    /**
     * @return bool
     */
    public function success();

    /**
     * @return bool
     */
    public function exception();

    /**
     * @return bool
     */
    public function canParse();
}
