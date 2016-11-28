<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
	<div class="container">
	<h4>Silakan Anda Masukkan Agenda Anda!!</h4>
	<hr>
	<form action="<?php echo site_url('admin/tambahagenda') ?>" role="form" method="post">
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
			<label for="judul">Nama Agenda</label>
			<input type="text" name="judul" class="form-control" value=" " placeholder="Masukkan status agenda" >
		</div>
		<div class="form-group">
			<label for="judul">Tanggal Agenda</label>
			<input type="date" name="tanggal" class="form-control" value=" " placeholder="tanggal" > s/d
			<input type="date" name="tanggal2" class="form-control" value=" " placeholder="tanggal" >
		</div>
		<div class="form-group">
			<label for="tempat">Tempat Pelaksanaan</label>
			<input type="text" name="tempat_pel" class="form-control" value=" " placeholder="tempat pelaksanaan" >
		</div>
		<div class="form-group">
			<label for="keterangan">Keterangan Agenda</label>
			<textarea name="keterangan" id="" rows="5" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="penulis">Penulis Agenda</label>
			<input type="text" name="penulis" class="form-control" value=" " placeholder="Masukkan nama anda" >
		</div>
		<div class="form-group">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
		</div>
	</form>
</div>
<hr>