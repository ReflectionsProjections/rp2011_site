<?php
include('../header.php');
if(isset($_POST['submit'])) {
	validateAdminLogin($_POST['password']);
	
	echo $_SESSION['admin'];
	
}

if(!isset($_SESSION['admin'])) {
	echo <<<EOT
	<form action="" method="post">
	Please enter Password: 
	<input  type="password" name="password" />
	<input type="submit" name="submit" value="Login" />
	</form>
EOT;
} else {
	echo <<<EOT
	<form action="addcompany.php" method="post">
	Company Name:
	<input type="text" name="company_name" />
	<br/>
	Representatives Name:
	<input type="text" name="rep_name" />
	<br/>
	Representative Email:
	<input tpe="text" name="rep_email" />
	<br/>
	<input type="submit" name="submit" value="Add Company"/>
	</form>
	
EOT;
}

?>
