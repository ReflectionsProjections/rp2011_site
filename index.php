<?php 
	include('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Reflections | Projections 2011</title>

	<!-- Styles -->
	<link href="css/styles.css" rel="stylesheet" type="text/css" />
	<link href="css/menu.css" rel="stylesheet" type="text/css" />
	<link href="css/footer.css" rel="stylesheet" type="text/css" />
	<link href="js/countdown/jquery.countdown.css" rel="stylesheet" type="text/css" />

	<!-- Scripts -->
	<script type="text/javascript" language="javascript" src="js/jQuery-v1.5.js"></script>
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
	</script>
</head>

<body>
	<div id="wrapper">
		<?php getHeader(); ?>
		<div id="content-wrapper">
				<div id="counter-wrapper">
					<div id="counter"></div>
					<p class="center" id="confdate">October 7 - 9, 2011</p>
				</div><!-- #counter-wrapper end -->
		</div><!-- #content-wrapper end -->
	</div><!-- #wrapper end -->
	<?php include('footer.php') ?>
</body>
</html>
