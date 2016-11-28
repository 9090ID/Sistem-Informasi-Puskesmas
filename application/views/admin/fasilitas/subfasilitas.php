<div class="container">
<h3>Data Sub Fasilitas</h3>
<hr />
<a href="<?php echo site_url('admin/tambahsubfasilitas') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Sub Fasilitas</a>
<?php if($hasil->num_rows()) { ?>
	<table class="table table-striped table-bordered ">
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
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
			<td><?php echo $baris->judul; ?></td>
			<td><?php echo $baris->isi; ?></td>
			<td><a href="<?php echo site_url('admin/ubahsubfasilitas/'.$baris->id_judul) ?>"><b class="icon-edit"></b>Edit</a></a></td>
			<td><a href="<?php echo site_url('admin/hapussubfasilitas/'.$baris->id_judul) ?>"><b class="icon-remove"></b>Edit</a></a></td>
		</tr>
		<?php 
		$no++;                      
		endforeach; 
		?>
	</table>

	<?php } else { ?>
	<p>Sub Kategori masih kosong</p>
	<?php } ?>
	</div>

