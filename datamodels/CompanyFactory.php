<?php
include('Company.php');
class CompanyFactory {
	
	public static function retrieveAllAtendingCompanies() {
		
		$query = "SELECT * FROM companies ORDER BY proper_name ASC";
		
		$result = DB::query($query);
		
		$companies = array();
		foreach($result as $r) {
			$companies[] = new Company($r['PROPER_NAME']);
		}
		
		return $companies;
	}
}