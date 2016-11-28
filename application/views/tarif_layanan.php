<div class="container">
<div class="row">
<div class="span9">
<div class="baca">
	<h3 class="judul">Tarif Layanan</h3><hr />
<form action="<?php echo site_url('welcome/tarif_layanan') ?>" method="post" >
	<div class="form-group">
		<label for="">Pilih Layanan</label>
		<input type="text" class="form-control" name="layanan" value="" placeholder="masukkan layanan" />
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-info" name="cari" value="Cari" />

	</div>
</form>
<table class="table table-striped">

	<tr>

		<th>Layanan</th>
		<th>Biaya</th>
	</tr>
	<?php foreach($tampil as $row) : ?>
	<tr>

		<td> <?php print $row->layanan; ?> </td>
		<td>Rp.<?php print $row->harga; ?> </td>
	</tr>
	<?php endforeach; ?>
</table>
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->







