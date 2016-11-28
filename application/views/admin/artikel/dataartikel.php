<div class="container">
	<h3 align="center">Data Artikel Puskesmas</h3>
	<hr>
	<a href="<?php echo site_url('admin/tambahartikel') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Artikel</a>
		<table class="table table-striped table-bordered">
			<?php if($hasil->num_rows()) { ?><br />
				<thead>
					<td>No</td>
					<td>Judul</td>
					<td>Penulis</td>
					<td>Url Foto</td>
					<td>Edit</td>
					<td>Delete</td>
				</thead>
			<?php 
			if($this->uri->segment(3)) {
			$no = (int) $this->uri->segment(3) + 1;
			} else {
			$no = 1;
			}
			foreach($hasil->result() as $baris) : ?>
				<tr>
					<td><?php echo $no; ?></td>
					<td> <?php echo $baris->judul; ?></td>
					<td><?php echo $baris->penulis; ?></td>
					<td><?php echo $baris->gambar; ?></td>
					<td><a href="<?php echo site_url('admin/ubahArtikel/'.$baris->idartikel) ?>"><b class="icon-edit"></b>Edit</a></td>
					<td><a href="<?php echo site_url('admin/hapusArtikel/'.$baris->idartikel) ?>"><b class="icon-remove"></b>Hapus</a></td>
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
</div>