<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="jumbotron banner text-center">
		<h1>Selamat Datang di</h1>
		<h1>Jelajah Satwa</h1>
	</div>
<div class="container">
	

	<div class="row">
		<div class="col-md-8">
			<?php foreach($query as $artikel): ?>
			<div>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading"><?php echo $artikel['judul']; ?></h4>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
		</div>
		<div class="cold-md-4">
		</div>
	</div>
</div>

