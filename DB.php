<?php
class DB {

	private static $db;
	private static $txnDepth = 0;

	private static function getDB() {
		if(!isset(self::$db)) {
			$host = Config::dbHostname;
			$user = Config::dbUsername;
			$pass = Config::dbPassword;
			$schema = Config::dbSchema;
			self::$db = new mysqli($host, $user, $pass, $schema);
		}
		return self::$db;
	}
	
	private static function incTxnDepth() {
		return self::$txnDepth++;
	}
	
	private static function decTxnDepth() {
		return --self::$txnDepth;
	}

	public static function san($input) {
		return self::sanitize($input);
	}

	public static function sanitize($input) {
		if(is_array($input)) {
			$a = array();
			foreach($input as $k => $v) {
				$a[$k] = self::sanitize($v);
			}
			return $a;
		}
		return self::getDB()->escape_string($input);
	}

	private static function pickImmediate($resultArray) {
		if($outer = reset($resultArray)) {
			if($inner = reset($outer)) {
				return $inner;
			}
		}
	}

	public static function query($query, $immediate = false) {
		$db = self::getDB();
		$result = $db->query($query);
		if($result === false) {
			if(Config::displayErrors) {
				echo $db->error . "\n<br />";
			}
			return false;
		}
		$resultArray = array();
		while($row = $result->fetch_assoc()) {
			$resultArray[] = array_change_key_case($row, CASE_UPPER);
		}
		if($immediate) {
			return self::pickImmediate($resultArray);
		}
		return $resultArray;
	}

	public static function update($query) {
		$db = self::getDB();
		$result = $db->query($query);
		if($result === false && Config::displayErrors) {
			echo $db->error . "\n<br />";
		}
		return $result;
	}

	public static function insertID() {
		return self::getDB()->insert_id;
	}

	public static function startTxn() {
		if(self::incTxnDepth() == 0) {
			self::update('START TRANSACTION');
		}
	}

	public static function rollbackTxn() {
		if(self::decTxnDepth() == 0) {
			self::update('ROLLBACK');
		}
	}

	public static function commitTxn() {
		if(self::decTxnDepth() == 0) {
			self::update('COMMIT');
		}
	}

}

