<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="navbar navbar-fixed-bottom">
	<div class="container">
		<div class="col-md-4 col-md-offset-8">
			<?php if($this->session->flashdata('tambah') == true) { ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				<b>Sukses!</b> Artikel berhasil ditambah.
			</div>
			<?php } elseif($this->session->flashdata('edit') == true) { ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				<b>Sukses!</b> Artikel berhasil diubah.
			</div>
			<?php } elseif($this->session->flashdata('toggle_status') == true) { ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				<b>Sukses!</b> Status berhasil diubah.
			</div>
			<?php } elseif($this->session->flashdata('hapus') == true) { ?>
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
				<b>Sukses!</b> Artikel berhasil dihapus.
			</div>
			<?php } ?>
		</div>
	</div>
</div>

<div class="container box">
	<h1 class="text-center text-danger margin-bottom-md">Daftar Artikel</h1>

	<a class="btn btn-primary" href="<?php echo base_url('artikel/tambah'); ?>">
		<i class="fa fa-plus"></i> Tambah Artikel
	</a>

	<hr>

	<div id="loading" class="text-center">
		<i class="fa fa-spin fa-spinner fa-5x"></i>
	</div>

	<table id="table-artikel" class="table table-bordered table-striped" cellspacing="0" width="100%" style="display: none;">
		<thead>
			<tr>
				<th class="text-center">No.</th>
				<th class="text-center">Judul</th>
				<th class="text-center">Kategori</th>
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
				<td><?php echo date_format(date_create($artikel['tanggal_post']), 'd/m/Y - H:i'); ?></td>
				<td>
					<?php 
						if(empty($artikel['tanggal_edit'])) { 
							echo "-";
						} else {
							echo date_format(date_create($artikel['tanggal_edit']), 'd/m/Y - H:i');
						}
					?>
				</td>
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
					<a id="btnDelete" class="btn btn-danger" href="javascript:void(0);" data="<?php echo $artikel['id']; ?>">
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

<script type="text/javascript">
	$(document).ready(function(){
		$('a#btnDelete').click(function(){
			var id = $(this).attr('data');
			var check = confirm('Anda ingin menghapus artikel ini?');

			if(check) {
				window.location.replace('<?php echo base_url()."artikel/hapus/" ?>' + id);
			}
		})

		$('#table-artikel').DataTable({
			responsive: true,
			columnDefs: [
				{
					targets: [5, 6],
					orderable: false
				}
			]
		});
		
		$('#loading').hide();
		$('#table-artikel').show();

		setTimeout(function(){
			$('.alert').fadeOut();
		}, 3000);
	});
</script>