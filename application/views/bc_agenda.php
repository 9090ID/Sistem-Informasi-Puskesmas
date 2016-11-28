<div class="container">
<div class="row">
<div class="span9">
	<div class="baca">
 <ul class="breadcrumb">
		<li><a href="<?php echo site_url() ?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Agenda Kegiatan Puskesmas  Kabupaten Kerinci</li>
	  </ul> 
  <h4 class="judul">Agenda Puskesmas <?php foreach ($data as $row):?> <?php echo $row->namapuskesmas;?> <?php endforeach;?> </h4><hr />

<?php foreach ($hasil as $row):?>
<h4><?php echo $row->judul;?></h4><br />
<table>
	<tr>
		<td><p>Tanggal Agenda&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td><?php echo $row->tanggal;?>&nbsps/d&nbsp<?php echo $row->tanggal2;?></p></td>
	</tr>
	<tr>
		<td><p>Tempat Pelaksanaan:</td><td><?php echo $row->tempat_pel;?></p></td>
	</tr>
	<tr>
		<td><p>Keterangan Agenda&nbsp&nbsp:</td><td><?php echo $row->keterangan;?></p></td>
	</tr>
	<tr>
		<td><p>Di Tulis Oleh&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</td><td><?php echo $row->penulis;?></p></td>
	</tr>
</table>
		<hr />	
		<?php endforeach;?>

				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
