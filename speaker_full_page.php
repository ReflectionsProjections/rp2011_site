<?php
getTopInfo();
if(!isset($speaker)) {
	header('Location: /speakers.php');
}

  $title = 'Speakers';
?>
<div id="wrapper">
	<?php getHeader(); ?>
	<div id="content-wrapper">
		
		<div id="content">
<?php  echo $speaker->getName(); ?>
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
		});

	</script>