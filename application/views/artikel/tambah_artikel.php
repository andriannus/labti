<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-8 col-md-offset-2 box">
		<h1 class="text-center text-danger margin-bottom-md">Tambah Artikel</h1>
		<hr>
		<?php echo form_open('artikel/tambah_proses', 'name="formTambah"'); ?>
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" placeholder="Masukkan judul" name="judul" ng-model="judul" required="">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" class="form-control" placeholder="Masukkan kategori" name="kategori" ng-model="kategori" required="">
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea id="isi-artikel" class="form-control" placeholder="Masukkan isi artikel" rows="5" name="isi" ng-model="isi"></textarea>
			</div>
			<div class="form-group">
				<button class="btn btn-success" type="submit" ng-show="formTambah.$valid">
					<i class="fa fa-check"></i> Submit
				</button>
				<button class="btn btn-success" type="submit" ng-show="formTambah.$invalid" disabled="">
					<i class="fa fa-check"></i> Submit
				</button>
				<a class="btn btn-danger" href="<?php echo base_url('admin/artikel'); ?>">
					<i class="fa fa-arrow-left"></i> Back
				</a>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#isi-artikel').summernote({
			height: 150,
			minHeight: null,
			maxHeight: null
		});
	})
</script>