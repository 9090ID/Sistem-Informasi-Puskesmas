<div class="container">
<div class="row">
<div class="span9">
	<div class="baca">
 <ul class="breadcrumb">
		<li><a href="<?php echo site_url() ?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Sejarah Puskesmas  Kabupaten Kerinci</li>
	  </ul> 
<h4 class="judul">Sejarah Puskesmas Kabupaten Kerinci</h4><hr />
<?php 
			if($this->uri->segment(3)) {
			$no = (int) $this->uri->segment(3) + 1;
			} else { $no = 1;
			}
				foreach ($data as $row):?>
		</p><a  href="<?php echo base_url();?>index.php/welcome/bc_sejarah/<?php echo $row->id_pus;?>"><b><?php echo $no; ?>.Sejarah Puskesmas &nbsp<?php echo $row->namapuskesmas;?></b></a>
		<?php 
			$no++;                      
			endforeach; ?>
			

				</div><!--tutup baca-->
			</div><!--tutup span9-->
		<div class="span3"><?php $this->load->view($sidebar);?></div>
	</div><!--tutup row-->
</div><!--tutup Container-->
