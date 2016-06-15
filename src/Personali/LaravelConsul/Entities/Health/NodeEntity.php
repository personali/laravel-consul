<?php
namespace Personali\LaravelConsul\Entities\Health;

use Personali\LaravelConsul\Entity\IEntity;

class NodeEntity implements IEntity{
	private $_name;
	private $_address;

	public static function fromArray($array){
		return new NodeEntity($array["Node"], $array["Address"]);
	}

	private function __construct($name, $address){
		$this->_name = $name;
		$this->_address = $address;
	}

	public function getName(){
		return $this->_name;
	}

	public function getAddress(){
		return $this->_address;
	}
}