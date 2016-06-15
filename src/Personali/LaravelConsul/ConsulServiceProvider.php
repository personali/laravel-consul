<?php
namespace Personali\LaravelConsul;

use Illuminate\Support\ServiceProvider;
class ConsulServiceProvide extends ServiceProvider{

    public function boot(){

    }

    public function register(){
        App::bind("consul", function(){
            return new Consul();
        });
    }
}