<?php
namespace Personali\LaravelConsul;
use Illuminate\Support\Facades\Facade;


class ConsulFacade extends Facade{

    protected static function getFacadeAccessor(){
        return 'consul';
    }
}