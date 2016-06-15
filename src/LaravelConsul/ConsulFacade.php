<?php
namespace Personali\LaravelConsul;
use Illuminate\Support\Facades\Facade;
/**
 * Class AnalyticsFacade
 *
 * @package Ipunkt\LaravelAnalytics
 */
class AnalyticsFacade extends Facade
{
    /**
     * facade accessor
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'consul';
    }
}