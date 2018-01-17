<div class="content">
	<div class="wrap">
		<div id="main" role="main">
		<ul id="tiles">
			<!- These are our grid blocks ->
			<?php foreach($query as $artikel): ?>
				<li id="post-article" data="<?php echo $artikel['id']; ?>">
					<div class="post-info">
						<div class="post-basic-info">
							<h3><a href="<?php echo $artikel['id']; ?>"><?php echo $artikel['judul']; ?></a></h3>
							<span><a href="#"><i class="fa fa-tag"></i> <?php echo $artikel['kategori']; ?></a></span>
							<?php if (strlen(strip_tags($artikel['konten'])) < 100) { ?>
							<p><?php echo strip_tags($artikel['konten']) ?></p>
							<?php } else { ?>
							<p><?php echo substr(strip_tags($artikel['konten']), 0, 99)."..."; ?></p>
							<?php } ?>
						</div>
					</div>
				</li>
			<?php endforeach; ?>
			<!- End of grid blocks ->
		</ul>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('li#post-article').click(function(){
			var id = $(this).attr('data');
			location.href = '<?php echo base_url()."site/view/" ?>' + id;
		})
	})
</script>