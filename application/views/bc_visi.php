
<div class="container">
<div class="row">
<div class="span9">

	<div class="baca">
		 <ul class="breadcrumb">
		<li><a href="<?php echo site_url() ?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Baca Visi Dan Misi</li>
	  </ul> 
	    <h4 class="judul">Visi Dan Misi Puskesmas <?php foreach ($data as $row):?> <?php echo $row->namapuskesmas;?> <?php endforeach;?> </h4><hr />

<?php foreach ($hasil as $row):?>
<?php echo $row->isi;?>
<hr /><?php endforeach;?>

<hr />
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->

