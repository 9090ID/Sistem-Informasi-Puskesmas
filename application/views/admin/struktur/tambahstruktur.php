
<div class="container">
<h4>Silakan Anda Foto Struktur Anda!!</h4>
<hr>
<form action="<?php echo site_url('admin/tambahstruktur') ?>" role="form" method="post" enctype="multipart/form-data">
<div class="form-group">
		<label for="">Nama Puskesmas</label>
		<select name="id_pus" id="" class="form-control">
			<?php foreach($subpuskesmas->result() as $baris) : ?>
			<option value="<?php echo $baris->id_pus ?>">
				<?php echo $baris->namapuskesmas ?>
			</option>
			<?php endforeach ?>
		</select>
	</div>
 <div class="form-group">
		<label for="">File</label>
		<input type="file" name="userfile">
</div>
<div class="form-group">
		<label for="judul">Nama Foto</label>
		<input type="text" name="namaimage" class="form-control" value=" " placeholder="Masukkan Nama" >
</div>
<div class="form-group">
		<input type="submit" name="simpan" value="Upload" class="btn btn-success" >
</div>
</form>

</div>
<hr>