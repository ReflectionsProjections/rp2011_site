<?php
include('../header.php');
if(!isset($_GET['code']) || !isValidURL($_GET['code'])) {
  header('Location: ./job-fair-info.php');
}

function isValidURL($code) {
  $code = DB::san($code);
  $query = "SELECT name FROM companies WHERE code = '$code'";
  
  return DB::query($query);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Job Fair</title>
    
	<link href="../css/styles.css" rel="stylesheet" type="text/css" />
    <link href="../css/menu.css" rel="stylesheet" type="text/css" />
	<link href="../css/footer.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="wrapper">
		<?php getHeader() ?>
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
        </div>
    </div>
	<?php include('../footer.php') ?>
</body>
</html>
