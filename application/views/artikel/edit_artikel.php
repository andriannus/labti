<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="col-md-8 col-md-offset-2 box">
		<h1 class="text-center text-danger margin-bottom-md">Edit Artikel</h1>
		<hr>
		<?php echo form_open('artikel/edit_proses', 'name="formTambah"'); ?>
			<?php echo form_hidden('id', $query->id); ?>
			<div class="form-group">
				<label>Judul</label>
				<input type="text" class="form-control" name="judul" value="<?php echo $query->judul; ?>" required="">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" class="form-control" name="kategori" value="<?php echo $query->kategori; ?>" required="">
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea class="form-control" rows="5" name="isi" required=""><?php echo $query->konten; ?></textarea>
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

