<div class="container">
<h3>Data Puskesmas Terdaftar Pada Website</h3>
<hr />
<a href="<?php echo site_url('admin/tambahpuskesmas') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Data Puskesmas</a>
<?php if($hasil->num_rows()) { ?>
	<table class="table table-striped table-bordered ">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
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
			<td><?php echo $baris->namapuskesmas; ?></td>
			<td><?php echo $baris->alamatpuskesmas; ?></td>
			<td><a href="<?php echo site_url('admin/ubahpuskesmas/'.$baris->id_pus) ?>"><b class="icon-edit"></b>Edit</a></a></td>
			<td><a href="<?php echo site_url('admin/hapuspuskesmas/'.$baris->id_pus) ?>"><b class="icon-remove"></b>Hapus</a></a></td>
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

