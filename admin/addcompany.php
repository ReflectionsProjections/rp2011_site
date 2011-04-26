<?php
include('../header.php');

//if(isAdmin()) {
	if(isset($_POST['submit'])) {
		$results = validateCompanyData($_POST);
		if(!isset($results['errors'])) {
			persistCompany($results);
			header('Location: ./');
		} else {
			echo "There was a problem with your data";
		}
	}
//}


function persistCompany($results) {
	$query = "INSERT INTO companies (`company_name`,`unique_code`,`rep_name`,`rep_email`)
                  VALUES ('" . $results['company_name'] . "', '" . buildUniqueCode($results['company_name'])  . "', '" . $results['rep_name'] . "', '" . $results['rep_email'] . "')";

	return DB::update($query);
}

function buildUniqueCode($companyName) {
	$code = $companyName;
	$characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

	for($i=0; $i<10; $i++) {
		$code .= $characters[rand(0,strlen($characters)-1)];	
	}
	return strtolower($code);

}


function validateCompanyData($companyData) {
	
	$resultData = array();
	$resultData['company_name'] = isset($companyData['company_name']) ? $companyData['company_name'] : '';
	$resultData['rep_name'] = isset($companyData['rep_name']) ? $companyData['rep_name'] : '';
	$resultData['rep_email'] = isset($companyData['rep_email']) ? $companyData['rep_email'] : '';
	
	return $resultData;
}
