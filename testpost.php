<?php
include('header.php');

$result_id = isset($_POST['result_id']) ? $_POST['result_id'] : '';
$result_status = isset($_POST['result_status']) ? $_POST['result_status'] : '';
$date_update = isset($_POST['date_update']) ? $_POST['date_update'] : '';
$user_referrer = isset($_POST['user_referrer']) ? $_POST['user_referrer'] : '';
$company_name = isset($_POST[4]) ? $_POST[4] : '';
$company_rep = isset($_POST[6]) ? $_POST[6] : '';
$rep_email = isset($_POST[34]) ? $_POST[34] : '';
$address1 = isset($_POST[47]) ? $_POST[47] : '';
$address2 = isset($_POST[48]) ? $_POST[48] : '';
$city = isset($_POST[49]) ? $_POST[49] : '';
$state = isset($_POST[51]) ? $_POST[51] : '';
$phone = isset($_POST[52]) ? $_POST[52] : '';

$referrer = isset($_POST['user_referrer']) ? $_POST['user_referrer'] : '';

$company_code = substr($referrer, strlen("http://www.acm.uiuc.edu/conference/2011/job-fair.php?code="));

$company_id = DB::query("SELECT id FROM companies WHERE code='$company_code'", true);


DB::update("INSERT INTO companies_registrations (`result_id`, `result_status`, `date_update`, `user_referrer`, `company_name`, 
						`company_representative`, `representative_email`, `address1`, `address2`, `city`, `state`, `phone`, `company_id`)
VALUES('$result_id', '$result_status', '$date_update', '$user_referrer', '$company_name', '$company_rep', '$rep_email', '$address1', '$address2', '$city', '$state',
'$phone', '$company_id')");

