<div class="container">
<h3 align="center">Data Visi Dan Misi</h3>
<hr>
<a href="<?php echo site_url('admin/tambahvisi') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Data Visi Dan Misi</a>
<?php if($hasil->num_rows()) { ?>
	<table class="table table-striped table-bordered">
		<tr>
			<th>No</th
			<th>Visi</th>
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
			<td> <?php echo $baris->isi; ?></td>
			<td><a href="<?php echo site_url('admin/ubahVisi/'.$baris->id) ?>"><b class="icon-edit"></b>Edit</a></td>
			<td><a href="<?php echo site_url('admin/hapusVisi/'.$baris->id) ?>"><b class="icon-remove"></b>Hapus</a></td>
		</tr>
		<?php 
		$no++;                      
		endforeach; 
		?>
	</table>
<?php } ?>
</div>