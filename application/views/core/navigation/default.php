<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
			aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('site/index'); ?>">Jelajah Satwa</a>
		</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php if(isset($menu) && $menu == 'about') { ?>
				<li class="active">
					<a href="<?php echo base_url('site/about'); ?>">
					<i class="fa fa-question-circle"></i> About</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="<?php echo base_url('site/about'); ?>">
					<i class="fa fa-question-circle"></i> About</a>
				</li>
				<?php } ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if($this->session->status != 'login') { ?>
					<?php if(isset($menu) && $menu == 'login') { ?>
					<li class="active">
						<a href="<?php echo base_url('user/login'); ?>">
						<i class="fa fa-sign-in"></i> Login</a>
					</li>
					<?php } else { ?>
					<li>
						<a href="<?php echo base_url('user/login'); ?>">
						<i class="fa fa-sign-in"></i> Login</a>
					</li>
					<?php } ?>
				<?php } else { ?>
				<li>
					<a href="<?php echo base_url('admin/index'); ?>">
					<i class="fa fa-sign-in"></i> Admin</a>
				</li>
				<?php } ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

