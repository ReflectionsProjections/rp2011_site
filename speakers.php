<?php
	include('header.php');
	include('datamodels/SpeakerFactory.php');
	getTopInfo('Speakers');
	
	$speakers = SpeakerFactory::retrieveAllSpeakers();
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		<h1 class="speaker-list-heading"></h1>
		<div id="content">
			<div id="names">
				<ul>
				<?php 
					foreach ($speakers as $speaker) {
						$speakerID = $speaker->getID();
						$croppedImage = $speaker->getCroppedPhoto();
						$fullName = $speaker->getName();
						$jobTitle = $speaker->getJobTitle();
						$affiliation = $speaker->getAffiliation();
						echo <<<EOT
						<li class="speaker">
							<a href="speaker_info.php?sid=$speakerID">
								<div class="speaker-pic">
									<img src="images/speakers/cropped/$croppedImage" alt="$fullName" height="150" />
								</div>
								<p class="speaker-name">$fullName</p>
								<p class="speaker-affiliation">$jobTitle, $affiliation</p>
							</a>
						</li>					
EOT;
					}
				?>
				</ul>
			</div>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('a.speaker').click(function() {
			return false;
		});
	});
</script>
<?php include('close-page.php') ?>