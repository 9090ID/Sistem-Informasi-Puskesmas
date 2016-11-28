<div class="container">
<form action="<?php echo site_url('admin/tambahfasilitas') ?>" role="form" method="post">
	<div class="form-group">
		<label for="">Judul Sub Fasilitas</label>
		<select name="id_judul" id="" class="form-control">
			<?php foreach($subfasilitas->result() as $baris) : ?>
			<option value="<?php echo $baris->id_judul ?>">
				<?php echo $baris->judul ?>
			</option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group <?php echo (form_error('unit') <> '') ? 'has-error' : '' ?> ">
		<label for="">Nama Unit</label>
		<input type="text" name="unit" class="form-control" value="<?php echo set_value('unit') ?>" placeholder="Nama Unit" >
	</div>

	<div class="form-group <?php echo (form_error('layanan') <> '') ? 'has-error' : '' ?> ">
		<label for="">Layanan</label>
		<input type="text" name="layanan" class="form-control" value="<?php echo set_value('layanan') ?>" placeholder="Layanan">
	</div>

	<div class="form-group <?php echo (form_error('hari') <> '') ? 'has-error' : '' ?> ">
		<label for="">Hari Buka</label>
		<input type="text" name="hari" class="form-control" value="<?php echo set_value('hari') ?>" placeholder="Hari Buka" >
	</div>
	<div class="form-group <?php echo (form_error('jam') <> '') ? 'has-error' : '' ?> ">
		<label for="">Jam Layanan</label>
		<input type="text" name="jam" class="form-control" value="<?php echo set_value('jam') ?>" placeholder="Jam Layanan" >
	</div>

	<div class="form-group <?php echo (form_error('harga') <> '') ? 'has-error' : '' ?> ">
		<label for="">Biaya Layanan</label>
		<input type="text" name="harga" class="form-control" value="<?php echo set_value('harga') ?>" placeholder="Biaya" >
	</div>
	<br />
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
<hr>