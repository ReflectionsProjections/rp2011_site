<?php
  $title = 'Speakers';
	include('header.php');
	include('datamodels/SpeakerFactory.php');
	getTopInfo();
	
	$speakers = SpeakerFactory::retrieveAllSpeakers();
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		<h1 class="speaker-list-heading vertical-text">speakers</h1>
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
						<li>
							<a href="speaker_info.php?sid=$speakerID" class="speaker">
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

<?php include('close-page.php') ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.speaker').hover(function() {
				$(this).find('a:last').trigger('hover');
				$(this).css('background-color', '#ff0000');
			}, function() {
				$(this).css('background-color', '#ffffff');
			});

			$('a.speaker').click(function() {
				var href = $(this).attr('href');

				$.ajax({
					  url: href,
					  data: {"ajax" : 1},
					  success: function(data){
						  alert(data);
						  var result = eval('(' + data + ')');
					  }
					});

				return false;
			});
			
		});

	</script>
