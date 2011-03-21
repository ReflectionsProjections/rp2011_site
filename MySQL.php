<?php
/**
 * Written by Matt Jurik
 */
class MySQL {
	
	private $host;
	private $database;
	private $user;
	private $pass;
	private $resource;
	private $isOpen;

	public function __construct($host, $database, $user, $pass) {
		$this->host = $host;
		$this->database = $database;
		$this->user = $user;
		$this->pass = $pass;
		$this->isOpen = false;
	}

	private function openConnection() {
		$this->isOpen = true;
		$this->resource = mysqli_connect($this->host, $this->user, $this->pass);
		mysqli_select_db($this->resource, $this->database);
	}

	public function executeUpdate($query) {
		if(!$this->isOpen) {
			$this->openConnection();
		}
		$result = mysqli_query($this->resource, $query);
		
		if($result === false && Config::displayErrors) {
			echo mysqli_error($this->resource) . "\n<br />";
		}
		
		return $result;
	}

	public function executeQuery($query, $initialQuery=false) {
		if(!$this->isOpen) {
			$this->openConnection();
		}
		$result = mysqli_query($this->resource, $query);
		if($result === false) {
			if(Config::displayErrors) {
				echo mysqli_error($this->resource) . "\n<br />";
			}
			return false;
		}

		$resultArray = array();
		while($row = mysqli_fetch_assoc($result)) {
			$resultArray[] = array_change_key_case($row, CASE_UPPER);
		}

		if(count($resultArray)==0) {
			return null;
		}
		if(count($resultArray)==1 && count($resultArray[0])==1) {
			return end($resultArray[0]);
		}
		return $resultArray;
	}

	public function lastInsertID() {
		if(!$this->isOpen) {
			$this->openConnection();
		}
		return mysqli_insert_id($this->resource);
	}

	public function sanitize($input) {
		if(!$this->isOpen) {
			$this->openConnection();
		}
		if(is_array($input))
			print_r($input);
		return mysqli_real_escape_string($this->resource, $input);
	}
	
	public function sanitizeAll($input) {
		$newArray = array();
		foreach($input as $key=>$value) {
			if($value && !is_array($value)) {
				$newArray[$key] = $this->sanitize($value);
			} else {
				$newArray[$key] = $this->sanitizeAll($value);
			}
		}
		
		return $newArray;
	}
	
}

