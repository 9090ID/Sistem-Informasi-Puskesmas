<div class="container">
<div class="row">
	<div class="span9">
		<div class="baca">
		<h3 class="judul"> Galleri Foto Puskesmas Kemantan Kerinci</h3><hr />
<ul class="pgwSlideshow">
<?php foreach ($data as $row):?>
	<li ><img src="<?php echo base_url().'assets/gambargalleri/'.$row->urlfoto;?>"alt="<?php echo $row->keterangan;?>"/>	</li>
	<?php endforeach;?>
</ul>
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
