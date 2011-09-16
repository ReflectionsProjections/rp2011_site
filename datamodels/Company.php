<?php
class Company {
	
	private $name;
	private $isRegistered;
	private $url;
	
	
	public function __construct($name, $isRegistered, $urlCode = null) {
		$this->name = $name;
		$this->isRegistered = $isRegistered;
	}
	
	
	public function getName() {
		return $this->name;
	}
	
	public function isRegistered() {
		return $this->isRegistered;
	}
}