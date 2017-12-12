<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html ng-app="">
	<head>
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/font-awesome/css/font-awesome.min.css'); ?>">

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/admin.css'); ?>">
	</head>
	<body>
		<header>
			<?php $this->load->view('core/navigation/admin'); ?>
		</header>

		<main>
			<?php $this->load->view($page); ?>
		</main>

		<script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js'); ?>"></script>

		<script src="<?php echo base_url('asset/angular/angular.min.js'); ?>"></script>
	</body>
</html>