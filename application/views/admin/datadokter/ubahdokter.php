
<div class="container">
	<form action="<?php echo site_url('admin/ubahdokter/'.$hasil->id) ?>" role="form" method="post">
<div class="form-group">
		<label for="">Nama Puskesmas</label>
		<select name="id_pus" id="" class="form-control">
			<?php foreach($subpuskesmas->result() as $baris) : ?>
			<option value="<?php echo $baris->id_pus ?>" <?php echo ($baris->id_pus == $hasil->id_pus) ? 'selected' : '' ?>>
				<?php echo $baris->namapuskesmas?>
			</option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $hasil->nama ?>" placeholder="Judul Fasilitas" >
	</div>
	<div class="form-group">
		<label for="">Jadwal Tugas</label>
		<input type="text" name="jadwal_tugas" class="form-control" value="<?php echo $hasil->jadwal_tugas ?>" placeholder="Judul Fasilitas" >
	</div>
	<div class="form-group">
		<label for="">Spesialis</label>
		<input type="text" name="spesialis" class="form-control" value="<?php echo $hasil->spesialis ?>" placeholder="Judul Fasilitas" >
	</div>
 
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
<hr>
</div>
