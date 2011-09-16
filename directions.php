<?php
	include('header.php');
	getTopInfo('Travel');
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		<h1 class="travel-heading"></h1>
		<div id="content">
			<div id="details-directions">
				<h2>Locations</h2>
				<p class="tab">
					<a href="http://cs.illinois.edu/siebel">Thomas M. Siebel Center for Computer Science</a><br />
					201 N. Goodwin Ave.<br />
					Urbana, IL 61801<br />
				</p>
				<p class="tab">
					<a href="http://cs.illinois.edu/csillinois">Digital Computer Lab</a><br />
					1304 W. Springfield Ave.<br />
					Urbana, IL 61801<br />
				</p>
				<h2>Directions</h2>
				<p class="tab" width="200px">Directions to the Urbana-Champaign campus are available <a href="http://illinois.edu/find/directions.html">here</a>.</p>
			</div>
			<div id="map-directions">
				<h2>Map</h2>
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?msa=0&amp;msid=211750165632595458874.00047251c742179b84767&amp;ie=UTF8&amp;t=m&amp;vpsrc=6&amp;ll=40.113535,-88.225815&amp;spn=0.002872,0.00456&amp;z=17&amp;output=embed"></iframe>
			</div>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>
<?php include('close-page.php') ?>
