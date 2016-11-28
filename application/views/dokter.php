<div class="container">
<div class="row">
	<div class="span9">	
			<div class="baca">
			<H3 class="judul">Informasi Data Dokter Puskesmas Kemantan Kerinci</h3><hr />		
			<?php 
			if($this->uri->segment(3)) {
			$no = (int) $this->uri->segment(3) + 1;
			} else { $no = 1;
			}
				foreach ($data as $row):?>
		</p><a  href="<?php echo base_url();?>index.php/welcome/bc_dokter/<?php echo $row->id_pus;?>"><b><?php echo $no; ?>.Data Jadwal Spesialis Puskesmas &nbsp<?php echo $row->namapuskesmas;?></b></a>
				<?php 
			$no++;                      
			endforeach; ?>


				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
