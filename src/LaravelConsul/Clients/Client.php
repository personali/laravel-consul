<?php
namespace Personali\LaravelConsul\Clients;

abstract Class Client{
	private $_api;

	public function __construct($uri){
		$consulAgent = config("consul.host") . ":" . config("consul.port") . $uri; 
		$this->_api = new \GuzzleHttp\Client(["base_uri"=>$consulAgent]);
	}

	protected function getConsulResponse($uri){
		$response = $this->_api->get($uri);
		return json_encode($response->getBody());
	}
}