<div class="container">
<div class="row">
<div class="span9">
<div class="baca">
<h5 class="judul">Konsultasi Masalah</h5>
<hr />
<p style="float:left; text-align:justify;">Pada sekarang sangat banyak berbagai macam penyakit yang menyerang masyarakat, Dengan banyaknya penyakit sekarang ini membuat
masyarakat kesulitan untuk berkonsultasi untuk mengetahui penyakit apa yang ia derita dan bagaimana cara penaganan penyakit tersebut,
maka dari itu kami puskesmas kemantan kerinci membuka peluang lebar untuk memberikan jawaban yang mungkin bisa membantu masyarakat dalam
menyelesaikan maslah penyakit yang diderita insya allah, dengan website ini masyarakat lebih memudahkan tanpa harus datang ke puskesmas kami. </p
	<hr  />
	<h4>**Silakan Konsultasikan Masalah Anda</h4>
	<form action="<?php echo site_url('welcome/konsultasi') ?>" role="form" method="post">
<div class="form-group">
		<label for="">Nama Anda</label>
		<input type="text" name="nama" class="form-control" value=" " placeholder="Masukkan Nama" >
</div>
<div class="form-group">
		<label for="">Umur</label>
		<input type="text" name="usia" class="form-control" value=" " placeholder="Umur Anda" >
</div>
<div class="form-group">
	<label for="">Jenis Kelamin</label>
		<input type="text" name="jk" class="form-control" value=" " placeholder="Jenis Kelamin" >
</div>
<div class="form-group">
	<label for="">Subjek</label>
		<input type="text" name="subjek" class="form-control" value=" " placeholder="Sebjek" >
</div>
<div class="form-group">
		<label for="">Konsultasi Anda</label>
		<textarea name="pertanyaan" cols="40" rows="10" class="form-control" ></textarea>
</div>

<div class="form-group">
		<input type="submit" name="simpan" value="Kirim" class="btn btn-success" >
</div>
</form>

<hr class="soften" />
<h4 class="judul">Jawaban </h4>
<hr class="soften" />


<?php foreach ($tampil as $row):?>

 <blockquote>
			  <p>Nama Yang Bertanya :<?php echo $row->nama ?></p>  
			  <p><strong>Pertanyaan</strong> <?php echo $row->pertanyaan ?></p>
			<p><strong>Jawaban</strong><?php echo $row->jawaban ?></p>  
			  <small><strong>Dijawab oleh</strong>&nbsp<?php echo $row->nama_jawaban ?></small>
			<hr class="soften" />
			</blockquote>	
	<?php endforeach;?>

				
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
