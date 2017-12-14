<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-4 col-md-offset-4 box">
		<h1 class="text-center text-danger margin-bottom-md">Edit Password</h1>
		<hr>
		<?php echo form_open('user/login_proses', 'name="login"'); ?>
			<div class="form-group">
				<label>Password Lama</label>
				<input type="password" class="form-control" placeholder="Masukkan Password" name="password" ng-model="password" required="">
			</div>
			<div class="form-group">
				<label>Password Baru</label>
				<input type="password" class="form-control" placeholder="Masukkan Password" name="password" ng-model="password" required="">
			</div>
			<div class="form-group">
				<label>Konfirmasi Password</label>
				<input type="password" class="form-control" placeholder="Masukkan Password" name="password" ng-model="password" required="">
			</div>
			<div class="form-group">
				<button class="btn btn-primary btn-lg btn-block" ng-show="login.$valid">Submit</button>
				<button class="btn btn-primary btn-lg btn-block" ng-show="login.$invalid" disabled>Submit</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>