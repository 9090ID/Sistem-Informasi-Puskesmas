<div class="container">
<div class="row">
	<div class="span9">	
		
			<div class="baca">
			<H3 class="judul">Jadwal Poliklinik</h3><hr />		
			<table  class="table table-striped table-bordered">
				<thead>
					<th>Unit</th>
					<th>Hari</th>
					<th>Jam</th>
				</thead>
				<?php foreach ($data as $row):?>
				<tr>
					<td><?php echo $row->unit;?></td>
		<td><?php echo $row->hari;?></td>
		<td><?php echo $row->jam;?></td>
		</tr>
		<?php endforeach;?>
			</table>
		
				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
