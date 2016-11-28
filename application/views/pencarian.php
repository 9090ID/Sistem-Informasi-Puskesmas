<div class="container">
<div class="row">
<div class="span9">	
<div class="baca">
	

	<h3>Hasil Pencarian Artikel Pencarian "<?php echo $katapencarian ?>" <small class="pull-right"> </small></h3>
	<?php if($artikel->num_rows()) { ?>
	<hr class="soft"/>
				<?php foreach($artikel->result() as $baris) : ?>   
				<h3><?php echo $baris->judul;?></h3>
				<img src="<?php echo base_url().'assets/artikels/'.$baris->gambar;?>" width="300"height="250"alt=""/>
				<p class="text-left"><?php echo $baris->isi;?></p>
				
				<?php endforeach ?>
			 
			 
	<?php } else { ?>
	<p>Mohon Maaf Artikel Yang Anda Cari Belum Ada <hr class="soft"/></p>
	<?php } ?>
	
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->

