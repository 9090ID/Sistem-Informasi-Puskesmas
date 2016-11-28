<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
<div class="container">
<h4>Silakan Anda Masukkan Informasi Terbaru!!</h4>
<hr>
<form action="<?php echo site_url('admin/tambahinfo') ?>" role="form" method="post" enctype="multipart/form-data">
 <div class="form-group">
		<label for="">File</label>
		<input type="file" name="userfile">
</div>
<div class="form-group">
		<label for="judul">Penulis Artikel</label>
		<input type="text" name="penulis" class="form-control" value=" " placeholder="Masukkan Nama" >
</div>
<div class="form-group">
		<label for="judul">Judul Artikel</label>
		<input type="text" name="judul" class="form-control" value=" " placeholder="Judul" >
</div>
<div class="form-group">
		<label for="isi">Isi Artikel</label>
		<textarea name="isi" id="" rows="5" class="form-control"></textarea>
</div>
<div class="form-group">
	<label for="tanggal">Tanggal</label>
		<input type="date" name="tanggal" class="form-control" value=" " placeholder="Tanggal" >
</div>
<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
</div>
</form>

</div>
<hr>