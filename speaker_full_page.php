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
				<?php 
	$talks = $speaker->getTalks();
					foreach($talks as $talk) {
						echo '<div class="i-speaker-abstract" >';
						echo '<h2>';
						echo	'Presenting: ' . $talk->getTitle();
						echo '</h2>';
						echo '<div class="speaker-talk-abstract">';
						echo $talk->getDescription();
						echo '</div>';
						echo '</div>';
						echo "<br/>";
					}
?>
				<div id="i-speaker-bio">
					<h2>Bio</h2>
					<p><?php echo nl2br($speaker->getBio()); ?></p>
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
<?php include('close-page.php') ?>
