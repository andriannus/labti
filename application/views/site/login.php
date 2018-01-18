<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="navbar navbar-fixed-bottom">
	<div class="container">
		<div class="col-md-4 col-md-offset-8">
			<div class="alert alert-danger" style="display: none;">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				<b>Gagal!</b> Username atau password salah.
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-md-4 col-md-offset-4 box">
		<h1 class="text-center text-danger margin-bottom-md">Login</h1>
		<hr>
		<form id="loginForm" method="post" action="<?php echo base_url('user/login_proses') ?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" placeholder="Masukkan Username" name="username" autofocus="">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Masukkan Password" name="password">
			</div>
			<div class="form-group">
				<button id="loginButton" class="btn btn-primary btn-lg btn-block" type="button">Submit</button>
				<button id="loadingButton" class="btn btn-primary btn-lg btn-block" type="button" disabled style="display: none;">Loading...</button>
			</div>
			<div class="form-group text-center">
				<p>Belum punya akun? <a href="<?php echo base_url('user/register') ?>">Daftar</a></p>
				<hr>
				<p><a class="btn btn-default" href="<?php echo base_url('site') ?>"><i class="fa fa-home"></i> Home</a></p>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		function setTimeout(){
			$('.alert').fadeOut(4000);
		};

		$('#loginButton').click(function(){
			checkLogin();
		})

		function checkLogin(){
			$('#loadingButton').show();
			$('#loginButton').hide();

			var url = $('#loginForm').attr('action');
			var data = $('#loginForm').serialize();

			$.ajax({
				type: 'post',
				url: url,
				data: data,
				dataType: 'json',
				success: function(data){
					if(data.success){
						window.location.replace('<?php echo base_url()."admin/index" ?>');
					} else {
						$('#loadingButton').hide();
						$('#loginButton').show();

						$('.alert').fadeIn(function(){
							setTimeout();
						});
					}
				},
				error: function(){
					alert('Error');
				}
			})
		}
	});
</script>