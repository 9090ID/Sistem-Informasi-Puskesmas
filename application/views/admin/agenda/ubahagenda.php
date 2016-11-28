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
	<form action="<?php echo site_url('admin/ubahAgenda/'.$hasil->id) ?>" role="form" method="post">
	<div class="form-group">
		<label for="">Nama Puskesmas</label>
		<select name="id_pus" id="" class="form-control">
			<?php foreach($subpuskesmas->result() as $baris) : ?>
			<option value="<?php echo $baris->id_pus ?>" <?php echo ($baris->id_pus == $hasil->id_pus) ? 'selected' : '' ?>>
				<?php echo $baris->namapuskesmas?>
			</option>
			<?php endforeach ?>
		</select>
	</div>
		<div class="form-group">
			<label for="">Nama Agenda</label>
			<input type="text" name="judul" class="form-control" value="<?php echo $hasil->judul; ?>"  >
		</div>
		<div class="form-group">
			<label for="">Tanggal Agenda</label>
			<input type="date" name="tanggal" class="form-control" value="<?php echo $hasil->tanggal; ?>" > s/d
			<input type="date" name="tanggal2" class="form-control" value="<?php echo $hasil->tanggal; ?>" > 
		</div>
		<div class="form-group">
			<label for="">Tempat Pelaksanaan</label>
			<input type="text" name="tempat_pel" class="form-control" value="<?php echo $hasil->tempat_pel; ?>"  >
		</div>
		<div class="form-group">
			<label for="">Keterangan Agenda</label>
			<textarea name="keterangan" id="" rows="5" class="form-control"><?php echo $hasil->keterangan ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Penulis Agenda</label>
			<input type="text" name="penulis" class="form-control" value="<?php echo $hasil->penulis; ?>"  >
		</div>
		<div class="form-group">
		<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
		</div>
	</form>
</div>
<hr>