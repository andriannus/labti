<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('asset/images/fav-icon.jpg') ?>" />
		<title><?php echo $title; ?></title>

		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css'); ?>">

		<!-- DataTable CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/dataTables/css/dataTables.bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/responsive/css/responsive.bootstrap.min.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/responsive/css/responsive.dataTables.min.css'); ?>">
		
		<!-- FontAwesome -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/font-awesome/css/font-awesome.min.css'); ?>">

		<!-- CSS Admin -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/admin.css'); ?>">
		
		<!-- jQuery -->
		<script src="<?php echo base_url('asset/js/jquery.min.js'); ?>"></script>
	</head>
	<body>
		<header>
			<!-- Load menu -->
			<?php $this->load->view('core/navigation/admin'); ?>
		</header>

		<main>
			<!-- Load content -->
			<?php $this->load->view($page); ?>
		</main>

		

		<!-- Bootstrap -->
		<script src="<?php echo base_url('asset/bootstrap/js/bootstrap.min.js'); ?>"></script>

		<!-- DataTables -->
		<script src="<?php echo base_url('asset/dataTables/js/jquery.dataTables.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/dataTables/js/dataTables.bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/responsive/js/dataTables.responsive.min.js'); ?>"></script>
		<script src="<?php echo base_url('asset/responsive/js/responsive.bootstrap.min.js'); ?>"></script>

		<!-- CKEditor -->
		<script src="<?php echo base_url('asset/ckeditor/ckeditor.js'); ?>"></script>
	</body>
</html>