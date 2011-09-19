<?php
	include('config.php');
	include('DB.php');
  
	ini_set('display_errors', Config::displayErrors);
	ini_set('error_reporting', Config::errorReporting);
	date_default_timezone_set(Config::timezone);
	session_set_cookie_params(31536000, '/');
	session_start();

	function getHeader() {
		echo<<<EOT
			<div id="announcement">
				<p>Register to <a href="register.php">attend</a>, <a href="volunteers.php">volunteer</a>, or <a href="mechmania.php">compete</a>!</p>
			</div>
			<div id="header">
				<div id="logo"><a href="index.php" title="Home">Reflections | Projections 2011</a></div>
			</div>
EOT;
		include('menu.php');
	}

	function isAdmin() {
		return $_SESSION['admin'];
	}

	function validateAdminLogin($password) {
		$query = "SELECT `value` FROM `config` WHERE `key`='admin_password'";
		$val = '';
		if(($val = DB::query($query,true)) == sha1($password)) {
			echo $val;
			$_SESSION['admin'] = true;
			return;
		} else {
			echo $val;
			echo "<br/>" . $password;
			echo "<br/>" . sha1($password);
			return null;
		}
	}

function getTopInfo($title = null) {

	$directoryRoot = dirname($_SERVER['REQUEST_URI']);

	if (substr($directoryRoot, strlen($directoryRoot) - 1) == "/") {
		$directoryRoot = substr($directoryRoot, 0, strlen($directoryRoot) - 1);
	}

	$cssDirectory = $directoryRoot . "css";
	$jsDirectory = $directoryRoot . "js";

	$pageTitle = ($title) ? $title . " &laquo; " : "";

	echo<<<EOT
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>$pageTitle Reflections | Projections 2011</title>
	
		<!-- Styles -->
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link href="css/schedule.css" rel="stylesheet" type="text/css" />
		<link href="css/footer.css" rel="stylesheet" type="text/css" />
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="css/orbit-1.2.3.css" rel="stylesheet" type="text/css" />
		<link href="js/countdown/jquery.countdown.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
EOT;
}
?>