<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="jumbotron text-center">
		<h1>Selamat Datang di</h1>
		<h1>Jelajah Satwa</h1>
	</div>

	<div class="row">
		<div class="col-md-8">
			<?php foreach($query as $artikel): ?>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3><?php echo $artikel['judul']; ?></h3>
				</div>
				<div class="panel-body">
					<p><?php echo $artikel['konten']; ?></p>
				</div>
				<div class="panel-footer">
					<a class="btn btn-primary" href="<?php echo base_url('artikel/view/'.$artikel['id']); ?>">Lihat artikel <i class="fa fa-arrow-right"></i></a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		</div>
		<div class="cold-md-4">
		</div>
	</div>
</div>

