<div class="container">
<h3 align="center">Data Sejarah Puskesmas</h3>
<hr>
<a href="<?php echo site_url('admin/tambahsejarah') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Data Sejarah</a>
<?php if($hasil->num_rows()) { ?>
	<table class="table table-striped table-bordered">
		<tr>
			<th>No</th>
			<th>isi</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		<?php 
			$no = 1;
		foreach($hasil->result() as $baris) : ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td> <?php echo $baris->isi; ?></td>
			<td><a href="<?php echo site_url('admin/ubahSejarah/'.$baris->id) ?>"><b class="icon-edit"></b>Edit</a></td>
			<td><a href="<?php echo site_url('admin/hapusSejarah/'.$baris->id) ?>"><b class="icon-remove"></b>Hapus</a></td>
		</tr>
		<?php 
		$no++;                      
		endforeach; 
		?>
	</table>
<?php } ?>
</div>