
<div class="container">
<h3> Add Data Dokter</h3>
<hr />
<form action="<?php echo site_url('admin/tambahdokter') ?>" role="form" method="post">
<div class="form-group">
		<label for="">Nama Puskesmas</label>
		<select name="id_pus" id="" class="form-control">
			<?php foreach($subpuskesmas->result() as $baris) : ?>
			<option value="<?php echo $baris->id_pus?>">
				<?php echo $baris->namapuskesmas ?>
			</option>
			<?php endforeach ?>
		</select>
	<div class="form-group ">
		<label for="">Nama Dokter</label>
		<input type="text" name="nama" class="form-control" placeholder="Nama Dokter" >
	</div>
	<div class="form-group  ">
		<label for="">Jadwal Tugas</label>
		<input type="text" name="jadwal_tugas" class="form-control" placeholder="Jadwal Tugas" >
	</div>
	<div class=" ">
		<label for="">Spesialis</label>
		<input type="text" name="spesialis" class="form-control" placeholder="Spesialis" >
	</div>
	
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
<hr>
</div>
