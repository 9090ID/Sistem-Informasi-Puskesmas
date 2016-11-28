<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
<div class="container">
<h4>Silakan Anda Masukkan Sejarah anda!!</h4>
<hr>
<form action="<?php echo site_url('admin/tambahsejarah') ?>" role="form" method="post">
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
		<label for="isi">Isi Sejarah</label>
		<textarea name="isi" id="" rows="5" class="form-control"></textarea>
</div>
<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
</div>
</form>

</div>
<hr>