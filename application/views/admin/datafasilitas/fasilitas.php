<div class="container">
<h3>Data Fasilitas Dan Layanan Puskesmas </h3>
<hr>
<a href="<?php echo site_url('admin/tambahfasilitas') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Data Fasilitas</a>
<?php if($hasil->num_rows()) { ?>

	<table class="table table-striped table-bordered">
		<tr>
			<th>No</th>
			<th>Unit</th>
			<th>Layanan</th>
			<th>Hari</th>
			<th>Harga</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
		<?php 
		if($this->uri->segment(3)) {
			$no = (int) $this->uri->segment(3) + 1;
		} else {
			$no = 1;
		}
		foreach($hasil->result() as $baris) : ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $baris->unit; ?></td>
			<td><?php echo $baris->layanan; ?></td>
			<td><?php echo $baris->hari; ?></td>
			<td><?php echo $baris->harga; ?></td>
			<td><a href="<?php echo site_url('admin/ubahFasilitas/'.$baris->id) ?>"><b class="icon-edit"></b>Edit</a></a></td>
			<td><a href="<?php echo site_url('admin/hapusFasilitas/'.$baris->id) ?>"><b class="icon-remove"></b>Hapus</a></a></td>
		</tr>
		<?php 
		$no++;                      
		endforeach; 
		?>
	</table>

		<?php echo $this->pagination->create_links() ?>
		<?php } else { ?>
		<p>Data masih kosong</p>
		<?php } ?>

	
</div>