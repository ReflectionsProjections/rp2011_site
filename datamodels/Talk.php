<?php
class Talk {

	private $title;
	private $description;
	private $location;


	public function __construct($title, $description, $location) {
		$this->title = $title;
		$this->description = $description;
		$this->location = $location;
	}


	public function getTitle() {
		return utf8_encode($this->title);
	}

	public function getDescription() {
		return utf8_encode($this->description);
	}

	public function getLocation() {
		return $this->location;
	}
}
