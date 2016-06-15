<?php
namespace Personali\LaravelConsul;

use Personali\LaravelConsul\Clients\HealthClient;

class Consul{
	private $_healthClient;

	private function getHealthClient(){
		if(null == $this->_healthClient){
			$this->_healthClient = new HealthClient();
		}

		return $this->_healthClient;
	}
} 