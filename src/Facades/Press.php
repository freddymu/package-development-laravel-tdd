<?php


namespace freddymu\Press\Facades;


use Illuminate\Support\Facades\Facade;

class Press extends Facade
{
    protected static function getFacadeAccessor()
    {
        // this is related to PressBaseServiceProvider
        // in method registerFacades()
        // you will see the Press has been registered to service container
        // with name Press
        // that is why this method return the same name
        return 'Press';
    }
}