<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-8 col-md-offset-2 box">
		<h1 class="text-center text-danger margin-bottom-md">Edit Artikel</h1>
		<hr>
		<?php echo form_open('artikel/edit_proses', 'name="formTambah"'); ?>
			<?php echo form_hidden('id', $query->id); ?>
			<?php echo form_hidden('tanggal_edit', date('Y-m-d H:i:s')); ?>
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul" value="<?php echo $query->judul; ?>" required="">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<?php $cek = $query->kategori; ?>
				<select name="kategori" class="form-control" required>
					<option disabled>-- Pilih Kategori --</option>
					<option value="cicak tembok" <?php if ($cek == 'cicak tembok') { echo 'selected'; } ?>>Cicak Tembok</option>
					<option value="cicak kayu" <?php if ($cek == 'cicak kayu') { echo 'selected'; } ?>>Cicak Kayu</option>
					<option value="cicak gula" <?php if ($cek == 'cicak gula') { echo 'selected'; } ?>>Cicak Gula</option>
					<option value="cicak batu" <?php if ($cek == 'cicak batu') { echo 'selected'; } ?>>Cicak Batu</option>
					<option value="cicak terbang" <?php if ($cek == 'cicak terbang') { echo 'selected'; } ?>>Cicak Terbang</option>
				</select>
			</div>
			<div class="form-group">
				<label>Isi</label>
				<div id="loading" class="text-center">
					<i class="fa fa-spin fa-spinner fa-5x"></i>
				</div>
				<textarea id="editor" class="form-control" placeholder="Masukkan isi artikel" rows="5" name="isi" style="display: none;"><?php echo $query->konten; ?></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-success" type="submit"><i class="fa fa-check"></i> Submit</button>
				<a class="btn btn-danger" href="<?php echo base_url('admin/artikel'); ?>">
					<i class="fa fa-arrow-left"></i> Back
				</a>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		ClassicEditor
			.create(document.querySelector('#editor'), {
				toolbar: [ 'headings', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo']
			})
			.then(editor => {
				console.log(Array.from( editor.ui.componentFactory.names()));
			})
			.catch(error => {
				console.log(error);
			});

		$('#loading').hide();
	})
</script>