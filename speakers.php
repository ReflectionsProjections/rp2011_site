<?php
include('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Speaker List</title>
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="css/footer.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="wrapper">
			<?php getHeader(); ?>
			<div id="content">
				<h1>Speaker List</h1>
				<div id="names">
					<ul>
						<li>Cliff Click - Distinguished Engineer, Azul Systems</li>
						<li>Josh Bloch - Chief Java Architect, Google</li>
						<li>Jon 'maddog' Hall - Executive Director, Linux International</li>
						<li>Rachael Brady - HCI/Visualizations Researcher, Duke University</li>
						<li>Scott Klemmer - HCI Researcher, Stanford University</li>
						<li>Mark Makdad - Director/Founder, Long Weekend LLC</li>
						<li>Ben Kamens - Lead Developer, Khan Academy</li>
						<li>Douglas Hofstadter - Professor of Cognitive Science, Indiana University</li>
						<li>Brian Murphy - Editor, Dorkly.com</li>
						<li>Mark Russinovich - Technical Fellow, Microsoft</li>
						<!-- Can we, maybe, link these to relevant web sites to simplify things for people? -->
						<li>Fred Gallagher - Co-Creator/Cartoonist, Megatokyo</li>
					</ul>
				</div>
			</div>
		</div>
		<?php include('footer.php') ?>
	</body>
</html>
