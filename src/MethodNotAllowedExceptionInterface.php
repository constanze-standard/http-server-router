<?php

namespace ConstanzeStandard\Standard\Http\Server;

/**
 * The exception for HTTP method not allowed.
 */
interface MethodNotAllowedExceptionInterface extends HttpExceptionInterface
{
    /**
     * Get allowed HTTP methods.
     * 
     * @return array
     */
    public function getAllowedMethods(): array;
}
