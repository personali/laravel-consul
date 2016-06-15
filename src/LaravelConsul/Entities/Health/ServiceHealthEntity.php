<?php
namespace Personali\LaravelConsul\Entities\Health;

use Personali\LaravelConsul\Entities\IEntity;


class ServiceHealthEntity implements IEntity{
	private $_node;
	private $_service;
	private $_checks;

	public static function fromArray($array){
		return new ServiceHealthEntity(NodeEntity::fromArray($array->Node));
	}

	private function __construct($node, $service = null, $checks = null){
		$this->_node = $node;
		$this->_service = $service;
		$this->_checks = $checks;
	}

	public function getNode(){
		return $this->_node;
	}

	public function getServices(){
		return $this->_services;
	}
}