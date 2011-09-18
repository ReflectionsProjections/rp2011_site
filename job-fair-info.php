<?php
include('header.php');
include('datamodels/CompanyFactory.php');
getTopInfo('Job Fair');

function IsNullOrEmptyString($question){
    return (!isset($question) || trim($question)==='');
}
	
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		<h1 class="job-fair-heading"></h1>
		<div id="content">
			<h2>Overview</h2>
			<p>Each year, Reflections | Projections starts with a job fair focused on companies hiring CS/ECE majors.  This year's fair will include:</p>
			<ol id="company-list">
				<?php
					$companies = CompanyFactory::retrieveAllAtendingCompanies();
					foreach($companies as $company) {
						if (!IsNullOrEmptyString($company->getName())) {
							echo "<li><a href=\"#\">" . $company->getName() . "</a></li>";
						}
					}
				?>
			</ol>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>
<?php include('close-page.php') ?>
