<?php
	include('header.php');
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
			<div id="featured-images">
				<img src="images/featured/1.jpg"></img>
				<img src="images/featured/3.jpg"></img>
				<img src="images/featured/4.jpg"></img>
			</div>
			<div id="counter-wrapper">
				<div id="counter"></div>
				<p class="center" id="confdate">October 7 - 9, 2011</p>
			</div><!-- #counter-wrapper end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>

<!-- Scripts last because we want the entire dom to be loaded.-->
<script type="text/javascript" language="javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" language="javascript" src="js/countdown/jquery.countdown.js"></script>
<script type="text/javascript" language="javascript">
	
	$(document).ready(function() {
		var today = new Date();
		var rpDate = new Date(2011, 9, 7, 00, 00, 00);

		$('#counter').countdown({
			labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Minutes', 'Seconds'],
			timeSeparator: ':',
			until: rpDate,
		});
	});

	$(window).load(function () {
		$('#featured-images').show();
		$('#featured-images').orbit({
		});
	});

</script>
<?php include('close-page.php') ?>
