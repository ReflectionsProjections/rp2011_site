<?php
include('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Travel</title>
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="css/footer.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="wrapper">
			<?php getHeader(); ?>
			<div id="content-wrapper">
				<h1 class="travel-heading vertical-text">travel</h1>
				<div id="content">
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
					<p class="tab">Directions to the Urbana-Champaign campus are available <a href="http://illinois.edu/find/directions.html">here</a>.</p>
				</div><!-- #content end -->
			</div><!-- #content-wrapper end -->
		</div><!-- #wrapper end -->
		<?php include('footer.php') ?>
	</body>
</html>
