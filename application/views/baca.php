<div class="container">
<div class="row">
	<div class="span9">
		<div class="baca">
	<h4 class="judul"> Artikel Terbaru</h4><hr />
		<?php foreach ($data as $row):?>
		<h4><?php echo $row->judul;?></h4>
		<p><img src="<?php echo base_url().'assets/artikels/'.$row->gambar;?>" style="float:left; padding:7px;text-align:justify;"width="200"height="200"alt=""/>
		<?php $baca=$row->isi;
		$baca=character_limiter($baca,700);?>
		<?php echo $baca;?></p><a  href="<?php echo base_url();?>index.php/welcome/selanjutnya/<?php echo $row->idartikel;?>"><i class="btn btn-info">Read More</i></a>
		<br /><br />Penulis:<?php echo $row->penulis;?>&nbsp| Tanggal Update:<?php echo $row->tanggalupdate;?><hr class="soften" />
		<?php endforeach;?>
		<?php echo $paging;?>
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
