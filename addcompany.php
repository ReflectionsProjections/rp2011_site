<?php 

include('test.php');

if (isset($_GET['c'])) {

	$code = addCompany($_GET['c']);
	echo $code;
}

?>
