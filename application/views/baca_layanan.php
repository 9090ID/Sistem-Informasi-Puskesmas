
<div class="container">
<div class="row">
<div class="span9">

		<div class="baca">
		 <ul class="breadcrumb">
		<li><a href="index.php/welcome/layanan">Fasilitas Dan Layanan</a> <span class="divider">/</span></li>
		<li class="active">Fasilitas Dan Pelayanan Puskesmas Kemantan Kabupaten Kerinci</li>
	  </ul> <hr />
<?php foreach ($hasil as $row):?>
<h3><?php echo $row->judul;?></h3><hr />
<?php echo $row->isi;?>
<?php endforeach;?>
<table class="table table-bordered table-striped">
	<tr>
		<th>Unit</th>
		<th>Hari</th>
		<th>Jam</th>
	</tr>
	<?php foreach ($data as $row):?>	
	<tr>
		<td><?php echo $row->unit;?></td>
		<td><?php echo $row->hari;?></td>
		<td><?php echo $row->jam;?></td>
	</tr>
		<?php endforeach;?>
</table>
<hr />
<h4>Informasi Tarif Layanan</h4>
<table  class="table table-bordered table-striped">
	<tr >
		<th>Layanan</th>
		<th>Biaya</th>
	</tr>
		<?php foreach ($data as $row):?>	
	<tr>
		<td><?php echo $row->layanan;?></td>
		<td>Rp.<?php echo $row->harga;?></td>
	</tr>
		<?php endforeach;?>
</table>

				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
