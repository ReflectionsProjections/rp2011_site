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
			<ul id="company-list">
				<?php
					$companies = CompanyFactory::retrieveAllAtendingCompanies();
					foreach($companies as $company) {
						if (!IsNullOrEmptyString($company->getName())) {
							echo "<li><a href=\"#\">" . $company->getName() . "</a></li>";
						}
					}
				?>
			</ul>
			<canvas id="company-tagcloud-canvas" height="300" width="420">
			</canvas>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>
<script type="text/javascript" src="js/jquery.tagcanvas.min.js"></script>
<script type="text/javascript">
	$(window).load(function() {
		if(!$('#company-tagcloud-canvas').tagcanvas({textColour: '#4662AD', outlineOffset: 1000, outlineColour: '#fff', interval: 10, maxSpeed: 0.04, decel: .97, reverse: true, zoom: 1.1},'company-list')) {
			console.log('noload');
			$('#company-tagcloud-canvas').hide(); // TagCanvas failed to load
			$('#company-list').css('visibility', 'visible');
		}
	});	
</script>
<?php include('close-page.php') ?>
