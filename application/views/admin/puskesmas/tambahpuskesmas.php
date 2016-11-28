
<div class="container">
<h3> Add Data Puskesmas</h3>
<hr />
<form action="<?php echo site_url('admin/tambahpuskesmas') ?>" role="form" method="post">
	<div class="form-group ">
		<label for="">Nama Puskesmas</label>
		<input type="text" name="namapuskesmas" class="form-control" placeholder="Nama Puskesmas" >
	</div>
	<div class="form-group  ">
		<label for="">Alamat Puskesmas</label>
		<input type="text" name="alamatpuskesmas" class="form-control" placeholder="Alamat Puskesmas" >
	</div>
	<div class="form-group ">
		<label for="">Kepala Puskesmas</label>
		<input type="text" name="kepala" class="form-control" placeholder="Kepala Puskesmas" >
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
<hr>
</div>
