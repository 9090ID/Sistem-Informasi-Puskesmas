<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
<div class="container">
<h3> Add Data Sub Fasilitas</h3>
<hr />
<form action="<?php echo site_url('admin/tambahsubfasilitas') ?>" role="form" method="post">
	<div class="form-group <?php echo (form_error('judul') <> '') ? 'has-error' : '' ?> ">
		<label for="">Judul</label>
		<input type="text" name="judul" class="form-control" placeholder="Judul Sub Fasilitas" >
	</div>
	 <div class="form-group">
		<label for="">Penjelasan</label>
		<textarea name="isi" id="" rows="5" class="form-control"></textarea>
	</div><br />
	<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
<hr>
</div>
