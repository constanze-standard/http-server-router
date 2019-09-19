<?php

namespace ConstanzeStandard\Standard\Http\Server;

/**
 * Informations for invoking the custom process.
 * 
 * @author Alex <omytty.alex@gmail.com>
 */
interface DispatchInformationInterface
{
    /**
     * Get the request callback.
     * 
     * @return callable|array|string
     */
    public function getHandler();

    /**
     * Get matched middlewares.
     * 
     * @return \Psr\Http\Server\MiddlewareInterface[]
     */
    public function getMiddlewares(): array;

    /**
     * Get additional parameters.
     * 
     * @return array
     */
    public function getArguments(): array;
}
