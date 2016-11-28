
<div class="container">
<div class="row">
<div class="span9">

	<div class="baca">
		 <ul class="breadcrumb">
		<li><a href="<?php echo site_url() ?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Baca Jadwal Dokter </li>
	  </ul> 
	  <h4 class="judul">Jadwal Dokter Spesialis Puskesmas </h4><hr />
	<table  class="table table-striped table-bordered">

	  <?php foreach ($hasil as $row):?>
				<tr>
				<th>Nama Puskesmas</th><td colspan='2'><?php echo $row->namapuskesmas;?></td>
				</tr>
					<tr>
				<th>Nama Kepala</th>	<td colspan='2'><?php echo $row->kepala;?></td>
				</tr>
				<tr>
				<th>Alamat Puskemas</th><td colspan='2'><?php echo $row->alamatpuskesmas;?></td><?php endforeach;?>
				</tr>
	
<table  class="table table-striped table-bordered">
				<tr>
					<th>Nama</th>
					<th>Jadwal Tugas</th>
					<th>Spesialis</th>
				</tr>
				 <?php foreach ($data as $row):?>
		<tr>
		<td><?php echo $row->nama;?></td>
		<td><?php echo $row->jadwal_tugas;?></td>
		<td><?php echo $row->spesialis;?></td>
		</tr>
		<?php endforeach;?>
			</table>
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->

