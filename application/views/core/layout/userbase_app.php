<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $title; ?></title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>">

		<!-- Fontawesome -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/font-awesome/css/font-awesome.min.css'); ?>">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/style2.css'); ?>">

		<!-- jQuery -->
		<script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
	</head>
	<body>

		<main>
			<!-- Load content -->
			<?php $this->load->view($page); ?>
		</main>

		<!-- Bootstrap JS -->
		<script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js'); ?>"></script>
	</body>
</html>