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
							<div class="speaker-pic">
								<a href="speaker_info.php?sid=$speakerID">
									<img src="images/speakers/cropped/$croppedImage" alt="$fullName" height="150" />
								</a>
							</div>
							<p class="speaker-name"><a href="speaker_info.php?sid=$speakerID">$fullName</a></p>
							<p class="speaker-affiliation">$jobTitle, $affiliation</p>
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