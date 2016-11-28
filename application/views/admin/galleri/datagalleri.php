<div class="container">
<h3>Data Galleri</h3>
<hr>
<a href="<?php echo site_url('admin/tambahgalleri') ?>"  class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Foto Gallri</a>
<?php if($hasil->num_rows()) { ?>

<table class="table table-striped table-bordered ">
		<tr>
			<th>No</th>
			<th>Nama Gambar</th>
			<th>Url Gambar</th>
			<th>Hapus</th>
		</tr>
		<?php 
		$no = 1;
		foreach($hasil->result() as $baris) : ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $baris->nama_foto; ?></td>
			<td><?php echo $baris->urlfoto; ?></td>
			<td><a href="<?php echo site_url('admin/hapusgalleri/'.$baris->id) ?>">Hapus</a></td>
		</tr>
		<?php 
		$no++;                      
		endforeach; 
		?>
	</table>

<?php echo $this->pagination->create_links() ?>
<?php } else { ?>
	<p>Artikel Masih Kosong</p>
<?php } ?>