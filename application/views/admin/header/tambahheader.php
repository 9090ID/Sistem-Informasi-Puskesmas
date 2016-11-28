<div class="container">
<a href="<?php echo site_url('admin/gambarheader') ?>" class="btn btn-primary" >Header</a>
<hr>

<form action="<?php echo site_url('admin/tambahheader') ?>" role="form" method="post" enctype="multipart/form-data" >
	<div class="form-group">
		<label for="">File</label>
		<input type="file" name="userfile">
	</div>
	<div class="form-group">
		<label for="">Nama Gambar</label>
		<input type="text" name="namagambar" class="form-control" placeholder="Nama Gambar" >
	</div>
	<div class="form-group">
		<label for="">Publish</label>
		<select name="tampil" class="form-control">
			<option value="y">Ya</option>
			<option value="t">Tidak</option>
		</select>
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>


<hr>