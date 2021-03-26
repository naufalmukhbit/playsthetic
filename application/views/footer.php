	
	<!--jQuery Embedding-->
	<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery-3.3.1.min.js"></script>
	<!--JavaScript-->
	<?php
	if (isset($filename)) {
		echo '<script src="' . base_url() . 'assets/js/' . $filename . '.js"></script>';
	}
	?>
	<!--Bootstrap's JavaScript Embedding-->
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--Bootstrap Form Helpers-->
	<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-form-helpers/js/bootstrap-formhelpers.min.js"></script>
	<!--autoNumeric Embedding-->
	<script src="<?php echo base_url(); ?>assets/vendor/autoNumeric/autoNumeric.js"></script>
</body>
<html>