<div class="container">
	<div class="row">
		<div class="span9">	
		
			<div class="baca">
			<h4 class="judul"> Fasilitas Dan Layanan Seluruh Puskesmas</h4><hr />
			<?php foreach ($data as $row):?>
			<h4><b><u><?php echo $row->judul;?></u></b></h4>
			<?php $baca=$row->isi;
			$baca=character_limiter($baca,300);?>
			<p><?php echo $baca;?></p><a  href="<?php echo base_url();?>index.php/welcome/baca_layanan/<?php echo $row->id_judul;?>"><button class="btn btn-info" ><i>Baca Selengkapnya</i></button></a>
			<hr /><?php endforeach;?>
			<?php echo $paging;?><!--menampilkan pagination-->
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
