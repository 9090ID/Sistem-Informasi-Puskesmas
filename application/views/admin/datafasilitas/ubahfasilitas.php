
<div class="container">
<form action="<?php echo site_url('admin/ubahfasilitas/'.$hasil->id) ?>" role="form" method="post">
 <div class="form-group">
		<label for="">Sub Kategori</label>
		<select name="id_judul" id="" class="form-control">
			<?php foreach($subfasilitas->result() as $baris) : ?>
			<option value="<?php echo $baris->id_judul ?>" <?php echo ($baris->id_judul == $hasil->id_judul) ? 'selected' : '' ?>>
				<?php echo $baris->judul?>
			</option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label for="">Unit Layanan</label>
		<input type="text" name="unit" class="form-control" value="<?php echo $hasil->unit; ?>" placeholder="Unit Layanan" >
	</div>

	<div class="form-group">
		<label for="">Layanan</label>
		<input type="text" name="layanan" class="form-control" value="<?php echo $hasil->layanan; ?>" placeholder="Layanan" >
	</div>

	<div class="form-group">
		<label for="">Hari Buka</label>
		<input type="text" name="hari" class="form-control" value="<?php echo $hasil->hari; ?>" placeholder="Hari Buka" >
	</div>
	
	<div class="form-group">
		<label for="">Jam Layanan</label>
		<input type="text" name="jam" class="form-control" value="<?php echo $hasil->jam; ?>" placeholder="Jam Layanan" >
	</div>

	<div class="form-group">
		<label for="">Biaya Layanan</label>
		<input type="text" name="harga" class="form-control" value="<?php echo $hasil->harga;?>" placeholder="Biaya Layanan" >
	</div>

	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
<hr>