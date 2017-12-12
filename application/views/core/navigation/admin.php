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
			<a class="navbar-brand" href="<?php echo base_url('admin'); ?>">Administrator</a>
		</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php if(isset($menu) && $menu == 'artikel') { ?>
				<li class="active">
					<a href="<?php echo base_url('admin/artikel'); ?>">
					<i class="fa fa-newspaper-o"></i> Artikel</a>
				</li>
				<?php } else { ?>
				<li>
					<a href="<?php echo base_url('admin/artikel'); ?>">
					<i class="fa fa-newspaper-o"></i> Artikel</a>
				</li>
				<?php } ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo base_url('user/logout'); ?>">
					<i class="fa fa-sign-out"></i> Logout</a>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

