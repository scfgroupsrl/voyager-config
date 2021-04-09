<?php

namespace ScfGroup\VoyagerConfig;

use Illuminate\Support\Facades\Facade;

class VoyagerConfigFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'voyager-config';
    }
}