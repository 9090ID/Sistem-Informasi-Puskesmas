<div class="container">
<h3>Data Dokter</h3>
<hr />
<a href="<?php echo site_url('admin/tambahdokter') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Data Dokter</a>
<?php if($hasil->num_rows()) { ?>
	<table class="table table-striped table-bordered ">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jadwal Masuk</th>
			<th>Spesialis</th>
			<th>Edit</th>
			<th>Delete</th>
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
			<td><?php echo $baris->nama; ?></td>
			<td><?php echo $baris->jadwal_tugas; ?></td>
			<td><?php echo $baris->spesialis; ?></td>
			<td><a href="<?php echo site_url('admin/ubahdokter/'.$baris->id) ?>"><b class="icon-edit"></b>Edit</a></a></td>
			<td><a href="<?php echo site_url('admin/hapusdokter/'.$baris->id) ?>"><b class="icon-remove"></b>Hapus</a></a></td>
		</tr>
		<?php 
		$no++;                      
		endforeach; 
		?>
	</table>

	<?php } else { ?>
	<p>Data masih kosong</p>
	<?php } ?>
	</div>

