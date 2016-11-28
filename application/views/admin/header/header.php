<div class="container">
<h3>Data Carousel</h3>
<hr>
<a href="<?php echo site_url('admin/tambahheader') ?>"  class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Carousel</a>
<?php if($hasil->num_rows()) { ?>

<table class="table table-striped table-bordered ">
		<tr>
			<th>No</th>
			<th>Nama Gambar</th>
			<th>Publish</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
		<?php 
		$no = 1;
		foreach($hasil->result() as $baris) : ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $baris->namagambar; ?></td>
			<td><?php echo $baris->tampil; ?></td>
			<td><a href="<?php echo site_url('admin/ubahheader/'.$baris->id_header) ?>">Edit</a></td>
			<td><a href="<?php echo site_url('admin/hapusheader/'.$baris->id_header) ?>">Hapus</a></td>
		</tr>
		<?php 
		$no++;                      
		endforeach; 
		?>
	</table>


<?php } else { ?>
	<p>Header masih kosong</p>
<?php } ?>
