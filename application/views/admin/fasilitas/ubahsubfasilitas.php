
<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
<div class="container">
	<form action="<?php echo site_url('admin/ubahsubfasilitas/'.$hasil->id_judul) ?>" role="form" method="post">
	<div class="form-group">
		<label for="">Judul</label>
		<input type="text" name="judul" class="form-control" value="<?php echo $hasil->judul ?>" placeholder="Judul Fasilitas" >
	</div>
 <div class="form-group">
		<label for="">Penjelasan</label>
		<textarea name="isi" id="" rows="5" class="form-control"><?php echo $hasil->isi ?></textarea>
	</div>
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
<hr>
</div>
