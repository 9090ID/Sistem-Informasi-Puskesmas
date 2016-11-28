<div class="container">
<h3 align="center">Data Konsultasi</h3>
<hr>
<?php if($hasil->num_rows()) { ?>
	<table class="table table-striped table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Yang Bertanya</th>
			<th>Jenis Konsul</th>
			<th>Subjek</th>
			<th>jawab</th>
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
			<td> <?php echo $baris->nama; ?></td>
			<td> <?php echo $baris->pertanyaan; ?></td>
			<td> <?php echo $baris->subjek; ?></td>
			<td><a href="<?php echo site_url('admin/ubahKonsul/'.$baris->id_konsul) ?>"><b class="icon-comment"></b>Jawab Pertanyaan</a></td>
			<td><a href="<?php echo site_url('admin/hapusKonsul/'.$baris->id_konsul) ?>"><b class="icon-remove"></b>Hapus</a></td>
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
<hr>
</div>