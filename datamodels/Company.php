<?php
class Company {
	
	private $name;
	private $url;
	
	
	public function __construct($name, $urlCode = null) {
		$this->name = $name;
	}
	
	
	public function getName() {
		return $this->name;
	}
}