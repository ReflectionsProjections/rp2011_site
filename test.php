<?php
include('DB.php');
include('config.php');
DB::update("INSERT INTO test(`content`) VALUES ('Ok here we go!')");
?>
