<?php
include('DB.php');
include('config.php');
function addCompany($name) {

$company = '';
if(isset($name)) {
  $company = $name;
} else {
  header('Location: /');
}


$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
$code = $company . "-";

for($p=0;$p <10;$p++) {
  $code .= $characters[mt_rand(0, strlen($characters))];
}

DB::update("INSERT INTO companies (`name`, `code`) 
            VALUES('$company', '$code')");
}

?>
