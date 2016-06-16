<?php
namespace Personali\LaravelConsul\Entities\Health;

use Personali\LaravelConsul\Entities\IEntity;

class ServiceEntity implements IEntity{
	private $_name;
	private $_address;
	private $_port;

	public static function fromArray($array){
		return new ServiceEntity($array->Service, $array->Address, $array->Port);
	}

	private function __construct($name, $address, $port){
		$this->_name = $name;
		$this->_address = $address;
		$this->_port = $port;
	}

	public function getName(){
		return $this->_name;
	}

	public function getAddress(){
		return $this->_address;
	}

	public function getPort(){
		return $this->_port;
	}
}