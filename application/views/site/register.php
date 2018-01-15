<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="navbar navbar-fixed-bottom">
	<div class="container">
		<div class="col-md-4 col-md-offset-8">
			<div class="alert alert-danger" style="display: none;">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				<b>Gagal!</b> <span id="message"></span>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-md-4 col-md-offset-4 box">
		<h1 class="text-center text-danger margin-bottom-md">Register</h1>
		<hr>
		<form id="registerForm" method="post" action="<?php echo base_url('user/register_proses') ?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" placeholder="Masukkan Username" name="username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" placeholder="Masukkan Password" name="password">
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Konfirmasi Password" name="passconf">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" placeholder="Masukkan Email" name="email">
			</div>
			<div class="form-group">
				<button id="registerButton" class="btn btn-primary btn-lg btn-block" type="button">Submit</button>
				<button id="loadingButton" class="btn btn-primary btn-lg btn-block" type="button" disabled style="display: none;">Loading...</button>
			</div>
			<div class="form-group text-center">
				<p>Sudah punya akun? <a href="<?php echo base_url('user/login') ?>">Masuk</a></p>
			</div>
		</form>
	</div>
</div>

<script>
	$(document).ready(function(){
		function setTimeout(){
			$('.alert').fadeOut(4000);
		};

		$('#registerButton').click(function(){
			registerCheck();
		})

		function registerCheck(){
			var username = $('input[name=username]');
			var password = $('input[name=password]');
			var passconf = $('input[name=passconf]');
			var email = $('input[name=email]');

			var result = '';

			if(username.val() == '') {
				username.parent().addClass('has-error');
			} else {
				username.parent().removeClass('has-error');
				result += 1;
			}

			if(password.val() == '') {
				password.parent().addClass('has-error');
			} else {
				password.parent().removeClass('has-error');
				result += 1;
			}

			if(passconf.val() == '') {
				passconf.parent().addClass('has-error');
			} else {
				passconf.parent().removeClass('has-error');
				result += 1;
			}

			if(password.val() != passconf.val()) {
				passconf.parent().addClass('has-error');
			} else {
				passconf.parent().removeClass('has-error');
				result += 1;
			}
			if(email.val() == '') {
				email.parent().addClass('has-error');
			} else {
				email.parent().removeClass('has-error');
				result += 1;
			}

			if(result == '11111'){
				$.ajax({
					type: 'post',
					url: '<?php echo base_url()."user/check_username"; ?>',
					data: 'username='+username.val(),
					dataType: 'json',
					success: function(data){
						if(data.success){
							registerProcess();
						} else {
							$('#message').text('Username telah digunakan.');
							$('.alert').show(function(){
								setTimeout();
							});
						}
					},
					error: function(){
						alert('Error');
					}
				})
			}
		}

		function registerProcess(){
			var url = $('#registerForm').attr('action');
			var data = $('#registerForm').serialize();

			$.ajax({
				type: 'post',
				url: url,
				data: data,
				dataType: 'json',
				success: function(data){
					if(data.success){
						window.location.href = '<?php echo base_url("user/login") ?>';
					} else {
						alert('Gagal membuat user baru');
					}
				},
				error: function(){
					alert('Error');
				}
			})
		}
	})
</script>