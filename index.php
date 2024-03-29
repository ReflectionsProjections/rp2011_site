<?php
	include('header.php');
	getTopInfo('Home');
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
			<div id="featured-images">
				<img src="images/featured/6.png"></img>
				<img src="images/featured/2.png"></img>
				<img src="images/featured/3.jpg"></img>
				<img src="images/featured/4.jpg"></img>
				<img src="images/featured/5.jpg"></img>
				<img src="images/featured/7.jpg"></img>
				<img src="images/featured/1.jpg"></img>
			</div>
			<div id="counter-wrapper">
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
	

	$(window).load(function () {
		$('#featured-images').show();
		$('#featured-images').orbit();
	});

</script>
<?php include('close-page.php') ?>
