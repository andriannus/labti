<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container box">
	<h1 class="text-center text-danger margin-bottom-md">Daftar Artikel</h1>

	<a class="btn btn-primary" href="<?php echo base_url('artikel/tambah'); ?>">
		<i class="fa fa-plus"></i> Tambah Artikel
	</a>

	<hr>

	<table class="table table-striped">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">
					<?php
						if($sort == 'judul' && $act == 'asc') {
					?>
					<form class="no-margin-bottom" method="get" action="<?php echo base_url('admin/artikel'); ?>">
						<?php echo form_hidden('sort', 'judul'); ?>
						<?php echo form_hidden('act', 'desc'); ?>
						<button class="btn-table" type="submit">Judul <i class="fa fa-caret-down"></i></button>
					</form>
					<?php
						} elseif($sort == 'judul' && $act == 'desc') {
					?>
					<form class="no-margin-bottom" method="get" action="<?php echo base_url('admin/artikel'); ?>">
						<?php echo form_hidden('sort', 'judul'); ?>
						<?php echo form_hidden('act', 'asc'); ?>
						<button class="btn-table" type="submit">Judul <i class="fa fa-caret-up"></i></button>
					</form>
					<?php
						} else {
					?>
					<form class="no-margin-bottom" method="get" action="<?php echo base_url('admin/artikel'); ?>">
						<?php echo form_hidden('sort', 'judul'); ?>
						<?php echo form_hidden('act', 'desc'); ?>
						<button class="btn-table" type="submit">Judul <i class="fa fa-caret-down"></i></button>
					</form>
					<?php } ?>
				</th>
				<th class="text-center">
					<?php
						if($sort == 'kategori' && $act == 'asc') {
					?>
					<form class="no-margin-bottom" method="get" action="<?php echo base_url('admin/artikel'); ?>">
						<?php echo form_hidden('sort', 'kategori'); ?>
						<?php echo form_hidden('act', 'desc'); ?>
						<button class="btn-table" type="submit">Kategori <i class="fa fa-caret-down"></i></button>
					</form>
					<?php
						} elseif($sort == 'kategori' && $act == 'desc') {
					?>
					<form class="no-margin-bottom" method="get" action="<?php echo base_url('admin/artikel'); ?>">
						<?php echo form_hidden('sort', 'kategori'); ?>
						<?php echo form_hidden('act', 'asc'); ?>
						<button class="btn-table" type="submit">Kategori <i class="fa fa-caret-up"></i></button>
					</form>
					<?php
						} else {
					?>
					<form class="no-margin-bottom" method="get" action="<?php echo base_url('admin/artikel'); ?>">
						<?php echo form_hidden('sort', 'kategori'); ?>
						<?php echo form_hidden('act', 'desc'); ?>
						<button class="btn-table" type="submit">Kategori <i class="fa fa-caret-down"></i></button>
					</form>
					<?php } ?>
				</th>
				<th class="text-center">Tanggal Posting</th>
				<th class="text-center">Tanggal Edit</th>
				<th class="text-center">Status</th>
				<th class="text-center">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($query as $artikel): 
			?>
			<tr class="text-center">
				<td><?php echo $no; ?></td>
				<td><?php echo $artikel['judul']; ?></td>
				<td><?php echo $artikel['kategori']; ?></td>
				<td><?php echo $artikel['tanggal_post']; ?></td>
				<td><?php echo $artikel['tanggal_edit']; ?></td>
				<td>
				<?php
					if($artikel['status'] == 1) { 

					echo form_open('artikel/toggle_status');
					echo form_hidden('id', $artikel['id']);
					echo form_hidden('status', '0');
				?>
						<button type="submit" class="btn-toggle text-info">
							<i class="fa fa-toggle-on"></i>
						</button>
					</form>
				<?php
					} else {

					echo form_open('artikel/toggle_status');
					echo form_hidden('id', $artikel['id']);
					echo form_hidden('status', '1');
				?>
						<button type="submit" class="btn-toggle">
							<i class="fa fa-toggle-off"></i>
						</button>
					</form>
				<?php } ?>
				</td>
				<td>
					<a class="btn btn-success" href="<?php echo base_url('artikel/edit/'.$artikel['id']); ?>">
						<i class="fa fa-pencil"></i>
					</a>
					<a class="btn btn-danger" href="<?php echo base_url('artikel/hapus/'.$artikel['id']); ?>">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
			<?php
				$no++;
				endforeach;
			?>
		</tbody>
	</table>
</div>