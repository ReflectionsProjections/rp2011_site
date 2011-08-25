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
			<div id="content-wrapper">
				<h1 class="speaker-list-heading vertical-text">speakers</h1>
				<div id="content">
					<div id="names">
						<ul>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Cliff Click" width="150" height="150" />
								</div>
								<p class="speaker-name">Cliff Click</p>
								<p class="speaker-affiliation">Distinguished Engineer, Azul Systems</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Josh Bloch" width="150" height="150" />
								</div>
								<p class="speaker-name">Josh Bloch</p>
								<p class="speaker-affiliation">Chief Java Architect, Google</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="John 'maddog' Hall" width="150" height="150" />
								</div>
								<p class="speaker-name">Jon 'maddog' Hall</p>
								<p class="speaker-affiliation">Executive Director, Linux International</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Mark Russinovich" width="150" height="150" />
								</div>
								<p class="speaker-name">Mark Russinovich</p>
								<p class="speaker-affiliation">Technical Fellow, Microsoft</p>
							</li>
							<li class="speaker clear">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Rachel Brady" width="150" height="150" />
								</div>
								<p class="speaker-name">Rachael Brady</p>
								<p class="speaker-affiliation">HCI/Visualizations Researcher, Duke University</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Scott Klemmer" width="150" height="150" />
								</div>
								<p class="speaker-name">Scott Klemmer</p>
								<p class="speaker-affiliation">HCI Researcher, Stanford University</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Mark Makdad" width="150" height="150" />
								</div>
								<p class="speaker-name">Mark Makdad</p>
								<p class="speaker-affiliation">Director/Founder, Long Weekend LLC</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Ben Kamens" width="150" height="150" />
								</div>
								<p class="speaker-name">Ben Kamens</p>
								<p class="speaker-affiliation">Lead Developer, Khan Academy</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Douglas Hofstadter" width="150" height="150" />
								</div>
								<p class="speaker-name">Douglas Hofstadter</p>
								<p class="speaker-affiliation">Professor of Cognitive Science, Indiana University</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Brian Murphy" width="150" height="150" />
								</div>
								<p class="speaker-name">Brian Murphy</p>
								<p class="speaker-affiliation">Editor, Dorkly.com</p>
							</li>
							<li class="speaker">
								<div class="speaker-pic">
									<img src="images/placeholder.png" alt="Fred Gallagher" width="150" height="150" />
								</div>
								<p class="speaker-name">Fred Gallagher</p>
								<p class="speaker-affiliation">Co-Creator/Cartoonist, Megatokyo</p>
							</li>
						</ul>
					</div>
				</div><!-- #content end -->
			</div><!-- #content-wrapper end -->
		</div><!-- #wrapper end -->
		<?php include('footer.php') ?>
	</body>
</html>
