<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
<div class="container">
<h4>Update Artikel<h4>
<hr>
	<form action="<?php echo site_url('admin/ubahArtikel/'.$hasil->idartikel) ?>" role="form" method="post">
		<div class="form-group">
			<label for="">Penulis</label>
			<input type="text" name="penulis" class="form-control" value="<?php echo $hasil->penulis; ?>"  >
		</div>
		<div class="form-group">
			<label for="">Judul</label>
			<input type="text" name="judul" class="form-control" value="<?php echo $hasil->judul; ?>" >
		</div>
		<div class="form-group">
			<label for="">Isi Artikel</label>
			<textarea name="isi" id="" rows="5" class="form-control"><?php echo $hasil->isi ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Tanggal Masuk</label>
			<input type="date" name="tanggalupdate" class="form-control" value="<?php echo $hasil->tanggalupdate; ?>"  >
		</div>
		<div class="form-group">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
		</div>
	</form>
</div>
<hr>