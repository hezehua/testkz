<?php
namespace Hezehua\Testkz\Facades;
use Illuminate\Support\Facades\Facade;
class Packagetest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'testkz';
    }
}
