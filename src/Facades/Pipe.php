<?php

namespace Pipedrive\Facades;
use Illuminate\Support\Facades\Facade;

class Pipe extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pipedrive';
    }
}