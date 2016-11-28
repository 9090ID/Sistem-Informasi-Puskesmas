
<div class="container">
<div class="row">
<div class="span9">

	<div class="baca">
		 <ul class="breadcrumb">
		<li><a href="<?php echo site_url() ?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Baca Struktur</li>
	  </ul> <hr />

  <h4 class="judul">Struktur Organisasi Puskesmas <?php foreach ($data as $row):?> <?php echo $row->namapuskesmas;?> <?php endforeach;?> </h4><hr />

<?php foreach ($hasil as $row):?>
<img src="<?php echo base_url().'assets/strukturs/'.$row->image;?>" width="600"height="600"alt=""/>
<hr /><?php endforeach;?>


				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->

