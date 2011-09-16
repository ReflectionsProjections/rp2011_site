<?php
	if(!isset($speaker)) {
		header('Location: /speakers.php');
	}
	getTopInfo($speaker->getName());
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		
		<div id="content">
			<h1 id="i-speaker-name-title"><?php echo $speaker->getName(); ?></h1>
			<h3><?php echo $speaker->getJobTitle(); ?>, <?php echo $speaker->getAffiliation(); ?></h3>
			<div id="i-speaker-info">
				<div id="i-speaker-pic">
					<img src="images/speakers/original/<?php echo $speaker->getFullPhoto(); ?>" alt="<?php echo $speaker->getName(); ?>" width="250" />
				</div>
				<div id="i-speaker-bio">
					<h2>Bio</h2>
					<p><?php echo $speaker->getBio(); ?></p>
				</div>
				<!-- 
				<div id="i-speaker-talks">
					<h2>Talk Abstract</h2>
					<p><?php echo $speaker->getBio(); ?></p>
				</div>
				-->
			</div>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.speaker').hover(function() {
			$(this).find('a:last').trigger('hover');
			$(this).css('background-color', '#ff0000');
		}, function() {
			$(this).css('background-color', '#ffffff');
		});
	});

</script>
<?php include('close-page.php') ?>