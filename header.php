<?php
	include('config.php');
	include('DB.php');
  
	ini_set('display_errors', Config::displayErrors);
	ini_set('error_reporting', Config::errorReporting);
	date_default_timezone_set(Config::timezone);
	session_set_cookie_params(31536000, '/');
	session_start();

	function getHeader() {
		echo <<<EOT
				<div id="announcement">
					<p><a href="volunteers.php">Volunteer Registration</a> is now open!</p>
				</div>
				<div id="header">
					<div id="logo">
						<a href="index.php" title="Home">Reflections | Projections 2011</a>
					</div>
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
?>
