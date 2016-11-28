<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
<div class="container">
<h3> Silakan Tambahkan Galleri Puskesmas Anda </h3>
<hr>
<form action="<?php echo site_url('admin/tambahgalleri') ?>" role="form" method="post" enctype="multipart/form-data" >
	<div class="form-group">
		<label for="">File</label>
		<input type="file" name="userfile">
	</div>
	<div class="form-group">
		<label for="">Nama Foto</label>
		<input type="text" name="nama_foto" class="form-control" placeholder="Nama Foto Ini" >
	</div>
	<div class="form-group">
		<label for="">Keterangan</label>
		<textarea name="keterangan" id="" rows="5" class="form-control"></textarea>
	</div><br />
	<div class="form-group">
		<input type="submit"name="simpan" value="Simpan" class="btn btn-success " >
	</div>
</form>


<hr>