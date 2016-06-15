<?php
namespace Personali\LaravelConsul;

use App;
use Illuminate\Support\ServiceProvider;
class ConsulServiceProvider extends ServiceProvider{

    public function boot(){

    }

    public function register(){
        App::bind("consul", function(){
            return new Consul();
        });
    }
}