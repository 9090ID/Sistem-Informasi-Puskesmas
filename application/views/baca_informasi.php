<div class="container">
<div class="row">
<div class="span9">
	<div class="baca">
		 <ul class="breadcrumb">
		<li><a href="<?php echo site_url() ?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Baca Informasi</li>
	  </ul> <hr />
<?php foreach ($data as $row):?>
<p>diposting pada : <?php echo $row->tanggal;?>&nbsp|&nbspoleh :<?php echo $row->penulis;?> </p>
<h1><?php echo $row->judul;?></h1>
<div id="#gallery">
<p><img src="<?php echo base_url().'assets/artikels/'.$row->gambar;?>" width="150"height="100"alt=""/ style="float:left; padding:7px;text-align:justify;font-family:Arial;"><?php echo $row->isi;?></p>
</div>
<?php endforeach;?>
<hr />
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->

