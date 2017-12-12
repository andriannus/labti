<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-4 col-md-offset-4 box">
		<h1 class="text-center text-danger margin-bottom-md">Login</h1>
		<hr>
		<?php echo form_open('user/login_proses', 'name="login"'); ?>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" placeholder="Masukkan Username" name="username" autofocus="" ng-model="username" required="">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Masukkan Password" name="password" ng-model="password" required="">
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-lg btn-block" ng-show="login.$valid">Submit</button>
				<button class="btn btn-primary btn-lg btn-block" ng-show="login.$invalid" disabled>Submit</button>
			</div>
			<div class="form-group text-center">
				<p>Belum punya akun? <a href="#">Daftar</a></p>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>