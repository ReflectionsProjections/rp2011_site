<?php
$title = 'Companies';
include('header.php');
$companyData = DB::query("SELECT * FROM companies");

$registeredCompanyIDs = DB::query("SELECT company_id FROM companies_registrations WHERE result_status = 'COMPLETE'");

if(isset($_POST['submit'])) {

  $isInvitedArray = array();
  foreach($_POST['was_sent'] as $companyID) {
	$isInvitedArray[] = 'companies.id = ' . $companyID;
  } 
  $clearAllQuery = "UPDATE companies SET is_invited=false WHERE 1=1";
  
  DB::update($clearAllQuery);

  $query = "UPDATE companies SET is_invited=true WHERE (" . implode(" OR ", $isInvitedArray) . ")";
  
  DB::update($query);
  header('Location: displaycompanies.php');
}

$regIDs = array();

foreach($registeredCompanyIDs as $r) {
	$regIDs[] = $r['COMPANY_ID'];
}

echo '<form action="" method="post">';
echo "<table  border=1>
	<tr>
	  <th>Company</th>
	  <th>Code</th>
	  <th>Was Sent</th>
	  <th>Is Registered</th>
	</tr>";


foreach($companyData as $company) {
$isRegistered = in_array($company['ID'], $regIDs);
$isRegistered = $isRegistered ? "checked" : "";
$wasSent = ($company['IS_INVITED'] == 1) ? "checked" : "unchecked";
$companyName = $company['NAME'];
$companyCode = $company['CODE'];
$companyID = $company['ID'];
echo <<< EOF
	<tr>
	  <td> $companyName </td>
	  <td> http://acm.uiuc.edu/conference/2011/job-fair.php?code=$companyCode </td>
	  <td> <input type="checkbox" value="$companyID" name="was_sent[]" $wasSent /> </td>
	  <td> <input type="checkbox" name="is_coming[]" $isRegistered disabled="disabled"/> </td>
	</tr>
EOF;
}
echo "</table>";
echo '<input type=submit name="submit" value="submit" />';
echo '</form>';
?>
