<?php
include('Company.php');
class CompanyFactory {

	public static function retrieveAllAtendingCompanies() {

		$companyData = DB::query("SELECT * FROM companies");
		$registeredCompanyIDs = DB::query("SELECT company_id FROM companies_registrations WHERE result_status = 'COMPLETE'");
		$regIDs = array();

		foreach($registeredCompanyIDs as $r) {
			$regIDs[] = $r['COMPANY_ID'];
		}

		$companies = array();

		foreach($companyData as $company) {
			$isRegistered = in_array($company['ID'], $regIDs);

			if($isRegistered) {
				$newCompany = new Company($company['PROPER_NAME'], true);
				$companies[] = $newCompany;
			}
		}


		return $companies;
	}
}