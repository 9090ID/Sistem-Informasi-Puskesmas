<div class="container">
<h3 align="center">Data Struktur Organisasi</h3>
<hr>
<a href="<?php echo site_url('admin/tambahstruktur') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Data Struktur</a>
<?php if($hasil->num_rows()) { ?>

	<table class="table table-striped table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Gambar</th>
			<th>Url Foto</th>
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
			<td><?php echo $baris->namaimage; ?></td>
			<td><?php echo $baris->image; ?></td>
			<td><a href="<?php echo site_url('admin/hapusStruktur/'.$baris->id ) ?>"><b class="icon-remove"></b>Hapus</a></td>
		</tr>
		<?php 
		$no++;                      
		endforeach; 
		?>
	</table>
<h5> Nb** Jika Struktur Lembaga Berubah, Silakan hapus data dan silahkan tambah gambah struktur yang baru....</h5>
	<?php echo $this->pagination->create_links() ?>
<?php } else { ?>
	<p>Gambar Masih Kosong</p>
<?php } ?>

</div>