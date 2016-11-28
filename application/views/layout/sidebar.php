
	<div class="row-fluid">
	<div class="baca">
			<form action="<?php echo site_url('welcome/pencarian') ?>" class="input-medium search-query " method="post">
  			 <input id="srchFld" type="text" name="judul" placeholder="Cari Artikel......." />
			</form><!--fungsi pencarian artikel-->
			<hr class="soften" />
				<ul class="nav nav-list">
				<h5 class="menukanan">Menu </h5>
				<hr class="soften" />
				<li ><a href="index.php/welcome/kt_sambutan"><b class="icon-indent-left"></b>Kata Sambutan Pimpinan </a></li>
				<li ><a href="index.php/welcome/sejarah"><b class="icon-indent-left"></b>Sejarah Puskesmas</a></li>
				<li><a  href="index.php/welcome/galleri"><b class="icon-indent-left"></b>Gallery</a></li>
				<li><a  href="index.php/welcome/jadwal_"><b class="icon-indent-left"></b>Jadwal Poliklnik</a></li>
				<li><a href="index.php/welcome/tarif_layanan"><b class="icon-indent-left"></b>Tarif Layanan</a></li>
				<li><a href="index.php/welcome/agenda"><b class="icon-indent-left"></b>Agenda Puskesmas</a></li>
			</ul>
			<hr class="soften" />
			<h5 class="menukanan">Informasi Tebaru</h5>
			<hr class="soften" />
			<?php foreach ($baris as $row):?>
		<p><a  href="<?php echo base_url();?>index.php/welcome/baca_informasi/<?php echo $row->id_info;?>"><img src="<?php echo base_url().'assets/artikels/'.$row->gambar;?>"width="60"height="40" style="float:left; padding:3px;text-align:justify;"alt=""/><b><?php echo $row->judul;?></b></a><hr/></p>
		<?php endforeach;?><br />
			<H4 class="menukanan">Statistik Pengunjung</H4>
			<hr class="soften" />
			<?php $this->load->view($konter);?>
			
			</div><!--tutup baca-->
	</div><!--tutup row-->
