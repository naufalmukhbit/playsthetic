<!DOCTYPE html>
<html>
<head>
	<title>
		<?php echo ($title ? $title : 'Playsthetic'); ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Favicon-->
	<link rel="icon" type="image" href="<?php echo base_url(); ?>assets/images/favicon.png">
	<!--Bootstrap's CSS Embedding-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--Font Embedding-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fonts.css">
	<!--Font Awesome Icons Embedding-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
	<!--Bootstrap Form Helpers-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap-form-helpers/css/bootstrap-formhelpers.min.css">
	<!--CSS-->
	<?php
	if(isset($filename)) {
		echo '<link rel="stylesheet" type="text/css" href="' . base_url() . 'assets/css/' . $filename . '.css">';
	}
	?>
	<!--Navbar CSS-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
</head>