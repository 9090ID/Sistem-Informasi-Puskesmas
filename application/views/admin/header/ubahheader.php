<div class="container">
<form action="<?php echo site_url('admin/ubahheader/'.$hasil->id_header) ?>" role="form" method="post" enctype="multipart/form-data" >

	<div class="form-group">
		<label for="">Nama Gambar</label>
		<input type="text" name="namagambar" class="form-control" placeholder="Nama Gambar" value="<?php echo $hasil->namagambar ?>" >
	</div>
	<div class="form-group">
		<label for="">Publish</label>
		<select name="tampil" class="form-control">
			<option value="Y" <?php echo ($hasil->tampil == 'y') ? 'selected' : '' ?> >Ya</option>
			<option value="N" <?php echo ($hasil->tampil == 't') ? 'selected' : '' ?> >Tidak</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>


<hr>