<div class="container">
<h4> Edit Data Puskesmas</h4>
<div class="container">
	<form action="<?php echo site_url('admin/ubahpuskesmas/'.$hasil->id_pus) ?>" role="form" method="post">
	<div class="form-group">
		<label for="">Nama Puskesmas</label>
		<input type="text" name="namapuskesmas" class="form-control" value="<?php echo $hasil->namapuskesmas ?>" >
	</div>
	<div class="form-group">
		<label for="">Alamat Puskesmas</label>
		<input type="text" name="alamatpuskesmas" class="form-control" value="<?php echo $hasil->alamatpuskesmas ?>" placeholder="Judul Fasilitas" >
	</div>
	<div class="form-group">
		<label for="">Kepala Puskesmas</label>
		<input type="text" name="kepala" class="form-control" value="<?php echo $hasil->kepala ?>" placeholder="Judul Fasilitas" >
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
<hr>
</div>
