<?php
	if(!isset($_GET['code']) || !isValidURL($_GET['code'])) {
		header('Location: ./job-fair-info.php');
	}

	function isValidURL($code) {
		$code = DB::san($code);
		$query = "SELECT name FROM companies WHERE code = '$code'";

		return DB::query($query);
	}
	include('header.php');
?>
<div id="wrapper">
	<?php getHeader() ?>
	<div id="content-wrapper">
		<div id="content">
			<div id="registration-form" style="width: 650px; margin: auto;">
				<a name="form1246816392" id="formAnchor1246816392"></a>
				<script type="text/javascript" src="http://fs17.formsite.com/include/form/embedManager.js?1246816392"></script>
				<script type="text/javascript">
					EmbedManager.embed({
						key: "http://fs17.formsite.com/form_app/FormSite?EParam=IRLY%2BVpkNNgGlFMPzwe1pSPoPJMOjxIEKm8qHSeyW8D82ZeyDUTf9Injqh0%2BizcTknr8BrCgzCc%3D&1246816392",
						width: "650px"
					});
				</script>
			</div>
		</div><!-- #content end -->
	</div><!-- #content-wrapper end -->
</div><!-- #wrapper end -->
<?php include('footer.php') ?>
<?php include('close-page.php') ?>
