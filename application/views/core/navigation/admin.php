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
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <i class="fa fa-caret-down"></i></a>
					<ul class="dropdown-menu">
						<li>
							<a href="#" data-toggle="modal" data-target="#myModal">Ubah Password</a>
						</li>
						<li>
							<a href="<?php echo base_url('user/logout'); ?>"> Logout</a>
						</li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<form method="post" action="<?php echo base_url('user/login_proses'); ?>" class="no-margin-bottom" name="login">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Ubah Password</h4>
			</div>
			<div class="modal-body">
					<div class="form-group">
						<label>Password Lama</label>
						<input type="password" class="form-control" placeholder="Masukkan Password" name="password_lama" ng-model="password_lama" required="">
					</div>
					<div class="form-group">
						<label>Password Baru</label>
						<input type="password" class="form-control" placeholder="Masukkan Password" name="password_baru" ng-model="password_baru" required="">
					</div>
					<div class="form-group">
						<label>Konfirmasi Password</label>
						<input type="password" class="form-control" placeholder="Masukkan Password" name="password_konfirmasi" ng-model="password_konfirmasi" required="">
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				<button class="btn btn-primary" ng-show="login.$valid">Submit</button>
				<button class="btn btn-primary" ng-show="login.$invalid" disabled>Submit</button>
			</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->