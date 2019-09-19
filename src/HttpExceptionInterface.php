<?php

namespace ConstanzeStandard\Standard\Http\Server;

use Throwable;

/**
 * The HTTP exception interface.
 * 
 * All exceptions for http error status need implement this interface.
 */
interface HttpExceptionInterface extends Throwable
{
}
