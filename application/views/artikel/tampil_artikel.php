<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-8 col-md-offset-2 box">
		<h1 class="text-center"><?php echo $query->judul; ?></h1>

		<hr>

		<p class="text-justify">
			<?php echo $query->konten; ?>
		</p>
	</div>
</div>