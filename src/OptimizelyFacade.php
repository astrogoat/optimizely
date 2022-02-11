<?php

namespace Astrogoat\Optimizely;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Optimizely\Optimizely
 */
class OptimizelyFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'optimizely';
    }
}
