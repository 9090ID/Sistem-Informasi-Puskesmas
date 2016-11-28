<script type="text/javascript" src="<?php echo base_url()?>assets/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init ({
		selector:"textarea",
		plugins:["advlist image"]
	});
</script>
<div class="container">
<h4>Jawab Pertanyaan<h4>
<hr>
<form action="<?php echo site_url('admin/ubahKonsul/'.$hasil->id_konsul) ?>" role="form" method="post">
		<div class="form-group">
			<label for="">Nama</label>
			<input readonly type="text" name="nama" class="form-control" value="<?php echo $hasil->nama; ?>" >
		</div>
		<div class="form-group">
			<label for="">Umur</label>
			<input readonly type="text" name="usia" class="form-control" value="<?php echo $hasil->usia; ?>" >
		</div>
		<div class="form-group">
			<label for="">Jenis Kelamin</label>
			<input readonly type="text" name="jk" class="form-control" value="<?php echo $hasil->jk; ?>" >
		</div>
		<div class="form-group">
			<label for="">Subjek</label>
			<input readonly type="text" name="subjek" class="form-control" value="<?php echo $hasil->subjek; ?>" >
		</div>
		<div class="form-group">
			<label for="">Pertanyaan</label>
			<textarea name="pertanyaan" id="" rows="5" class="form-control"><?php echo $hasil->pertanyaan ?></textarea>
		</div>
		<div class="form-group">
			<label for="">Masukkan Nama Anda Yang Menjawab</label>
			<input type="text" name="nama_jawaban" class="form-control" value="<?php echo $hasil->nama_jawaban; ?>" >
		</div>
		<div class="form-group">
			<label for="">Silakan Anda Jawab</label>
			<textarea name="jawaban" id="" rows="5" class="form-control"><?php echo $hasil->jawaban ?></textarea>
		</div><br />
		<div class="form-group">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-success" >
		</div>
</form>
</div>
<hr>