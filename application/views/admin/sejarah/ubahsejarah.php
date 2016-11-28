<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
<div class="container">
<h4>Ubah Sejarah<h4>
<hr>
<form action="<?php echo site_url('admin/ubahSejarah/'.$hasil->id) ?>" role="form" method="post">
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
			<label for="">Isi Kata Sambutan</label>
			<textarea name="isi" id="" rows="5" class="form-control"><?php echo $hasil->isi ?></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
	</div>
</form>
</div>
<hr>