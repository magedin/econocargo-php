<?php

declare(strict_types=1);

namespace EconoCargo\Framework\Http\Response;

/**
 * Interface ResponseSuccessInterface
 */
interface ResponseSuccessInterface extends ResponseInterface
{
    /**
     * @return array
     */
    public function getBody();
}
