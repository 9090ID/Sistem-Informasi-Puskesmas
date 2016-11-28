<div class="container">
	<h3 align="center">Data Agenda Puskesmas</h3>
	<hr>
	<a href="<?php echo site_url('admin/tambahagenda') ?>" class="btn btn-primary"style="font-family:andalus;font-size:13px;" ><b class="icon-plus icon-white"></b>Tambah Data Agenda</a>
	<table class="table table-striped table-bordered">
		<?php if($hasil->num_rows()) { ?><br />
			<thead>
				<td>No</td>
				<td>Judul</td>
				<td>tanggal</td>
				<td>tempat</td>
				<td>Edit</td>
				<td>Delete</td>
			</thead>
			<?php 
			if($this->uri->segment(3)) {
			$no = (int) $this->uri->segment(3) + 1;
			} else { $no = 1;
			}
			foreach($hasil->result() as $baris) : ?>
			<tr>
				<td><?php echo $no; ?></td>
				<td> <?php echo $baris->judul; ?></td>
				<td><?php echo $baris->tanggal; ?></td>
				<td><?php echo $baris->tempat_pel; ?></td>
				<td><a href="<?php echo site_url('admin/ubahAgenda/'.$baris->id) ?>"><b class="icon-edit"></b>Edit</a></td>
				<td><a href="<?php echo site_url('admin/hapusAgenda/'.$baris->id) ?>"><b class="icon-remove"></b>Hapus</a></td>
			</tr>
			<?php 
			$no++;                      
			endforeach; ?>
	</table>
	<?php echo $this->pagination->create_links() ?>
	<?php } else { ?>
	<p>Agenda Masih Kosong</p>
	<?php } ?>
</div>