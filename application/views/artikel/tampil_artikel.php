<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="content">
	<div class="wrap">
		<div class="single-page">
			<div class="single-page-artical">
				<div class="artical-content">
					<h3><?php echo $query->judul ?></h3>
					<hr>
						<?php echo $query->konten ?>
				</div>
				<div class="share-artical">
					<ul>
						<li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
						<li><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
						<li><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
			<div class="comment-section">
				<div class="grids_of_2">
					<h2>Comments</h2>
					<?php 
						// Cek apakah ada komentarnya?
						if (isset($user)) { 
							foreach($komentar as $komen):
					?>
							<div class="grid1_of_2">
								<div class="grid_text">
									<h4 class="style1 list"><a href="#"><?php echo $user->nama ?></a></h4>
									<h3 class="style"><?php echo date_format(date_create($komen['tanggal']), 'd/m/Y - H:i'); ?></h3>
									<p class="para top"><?php echo $komen['isi'] ?></p>
								</div>
								<div class="clear"></div>
							</div>

					<?php 
							endforeach;
						} else {
					 ?>
					 	<!-- Jika tidak ada komentar -->
					 	<p>Tidak ada komentar</p>
					<?php 
						}
					?>
					<div class="artical-commentbox">
					 	<h2>Leave a Comment</h2>
					 	<!-- Sudah login? -->
					 	<?php if ($this->session->status == 'login_admin' || $this->session->status == 'login') { ?>
			  			<div class="table-form">
							<form action="<?php echo base_url('komentar/tambah_proses') ?>" method="post" name="post_comment">
								<div>
									<label>Your Comment<span>*</span></label>
									<?php echo form_hidden('id_artikel', $this->uri->segment(3)) ?>
									<?php echo form_hidden('id_user', $this->session->id_user) ?>
									<textarea name="isi" required=""></textarea>	
								</div>
								<input type="submit" value="Submit">
							</form>
						</div>
						<div class="clear"> </div>
						<?php } else { ?>
							<!-- Belum login -->
				  			Please, <a href="<?php echo base_url('login') ?>"><u>login</u></a> to comment.
						<?php } ?>
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>
</script>