<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	  function __construct()
	{
		parent::__construct();
		$this->artikels = realpath(APPPATH.'../assets/'); //menagmbil gambar pada foldernya
		$this->load->library(array('session','form_validation','pagination'));//ngeload library ci
		$this->load->helper(array('date','text'));//load ke helper ci
		$this->load->database();//load database
		$this->load->model('mwellcome');//load ke model agar bisa berhubungan antara model dan welcome
		$this->load->library('calendar');//calender ci jika diperlukan
	}
	public function index() 
	{  
	$data['judul']="Halaman Menu Utama";
	$data['data']=$this->mwellcome->tampil();//ngeload ke model untuk baca 
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	$config['full_tag_open'] = '<div><ul class="pagination">';//untuk tampilan
	$config['full_tag_close'] = '</ul></div>';
	
	$config['base_url']			= base_url().'index.php/welcome/index/';//URL PAGINATION
	$config['total_rows']		=$this->mwellcome->baca_num_rows();//load ke models
	$config["per_page"]			=$per_page=4;
	$config["uri_segment"]		=3;
	
	$config['first_link'] 		= '&laquo; First';
	$config['first_tag_open'] 	= '<li class="prev page" >';
	$config['first_tag_close'] 	= '</li>';
	
	$config['last_link'] 		= 'Last &raquo;';
	$config['last_tag_open']    = '<li class="next page">';
	$config['last_tag_close']   = '</li>';
	
	$config['next_link']	    = '&raquo;';
	$config['next_tag_open']    = '<li class="next page">';
	$config['next_tag_close']   = '</li>';
	
	$config['prev_link']        = '&laquo;';
	$config['prev_tag_open']    = '<li class="prev page">';
	$config['prev_tag_close']   = '</li>';
	
	$config['cur_tag_open'] 	= '<li class="active"><a href="">';
	$config['cur_tag_close'] 	= '</a></li>';
	$config['num_tag_open'] 	= '<li class="page">';
	$config['num_tag_close'] = '</li>';
	
	$this->pagination->initialize($config);
	$data['paging']=$this->pagination->create_links();//LINK DI VIEW
	$page= ($this->uri->segment(3)) ? $this->uri->segment(3) :0;//menagmbil link
	$data ['data'] = $this->mwellcome->baca($per_page, $page);//ngeload ke models
	
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
		
	$this->load->view('layout/atas',$data);
	$this->load->view('baca',$data);
	$this->load->view('layout/bawah');
	}
	function selanjutnya(){
		$data['judul']="Baca Artikel";
	$idartikel=$this->uri->segment(3);
	$data['data']=$this->mwellcome->baca_artikel($idartikel);//ngeload ke model

		//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	$this->load->view('layout/atas',$data);
	$this->load->view('selanjutnya',$data);
	$this->load->view('layout/bawah');
	}	
	function baca_informasi(){
	$data['judul']="Baca Informasi";
	$id_info=$this->uri->segment(3);
	$data['data']=$this->mwellcome->baca_info($id_info);//ngeload ke model
	
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();
	
	$this->load->view('layout/atas',$data);
	$this->load->view('baca_informasi',$data);
	$this->load->view('layout/bawah');
	}	
	public function kt_sambutan(){
	$data['judul']='Kata Sambutan Pimpinan';
	
	$data['data']=$this->mwellcome->sambutan();//ngeload ke model
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	$this->load->view('layout/atas',$data);
	$this->load->view('kt_sambutan',$data);
	$this->load->view('layout/bawah');
	}
	public function sejarah(){
	$data['judul']='Sejarah Puskesmas';
	$data['data']=$this->mwellcome->Sejarah();//ngeload ke model
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	$this->load->view('layout/atas',$data);
	$this->load->view('sejarah',$data);
	$this->load->view('layout/bawah');
	}
		
	public function visi(){
	$data['judul']='Visi Dan Misi';
	$data['data']=$this->mwellcome->Visi();//ngeload ke model
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	$this->load->view('layout/atas',$data);
	$this->load->view('visi',$data);
	$this->load->view('layout/bawah');
	}
	
	public function struktur(){
	$data['judul']='Struktur Organisasi';
	$data['data']=$this->mwellcome->Struktur();//ngeload ke model
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	$this->load->view('layout/atas',$data);
	$this->load->view('struktur',$data);
	$this->load->view('layout/bawah');
	}
	
	public function layanan() 
	{  
	$data['judul']="Halaman Menu Utama";
	$data['data']=$this->mwellcome->Tlayanan();//ngeload ke model

	$config['full_tag_open'] = '<div><ul class="pagination">';//untuk tampilan
	$config['full_tag_close'] = '</ul></div>';

	$config['base_url']			= base_url().'index.php/welcome/layanan/';//URL PAGINATION
	$config['total_rows']		=$this->mwellcome->num_rows();//load ke models
	$config["per_page"]			=$per_page=15;
	$config["uri_segment"]		=3;

	$config['first_link'] 		= '&laquo; First';
	$config['first_tag_open'] 	= '<li class="prev page" >';
	$config['first_tag_close'] 	= '</li>';

	$config['last_link'] 		= 'Last &raquo;';
	$config['last_tag_open']    = '<li class="next page">';
	$config['last_tag_close']   = '</li>';

	$config['next_link']	    = '&raquo;';
	$config['next_tag_open']    = '<li class="next page">';
	$config['next_tag_close']   = '</li>';

	$config['prev_link']        = '&laquo;';
	$config['prev_tag_open']    = '<li class="prev page">';
	$config['prev_tag_close']   = '</li>';

	$config['cur_tag_open'] 	= '<li class="active"><a href="">';
	$config['cur_tag_close'] 	= '</a></li>';
	$config['num_tag_open'] 	= '<li class="page">';
	$config['num_tag_close'] = '</li>';

	$this->pagination->initialize($config);
	$data['paging']=$this->pagination->create_links();//LINK DI VIEW
	$page= ($this->uri->segment(3)) ? $this->uri->segment(3) :0;//menagmbil link
	$data ['data'] = $this->mwellcome->baca_pag($per_page, $page);//ngeload ke models
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	//ngeload ke view
	$this->load->view('layout/atas',$data);
	$this->load->view('layanan',$data);
	$this->load->view('layout/bawah');
	}
	function baca_layanan(){
	$data['judul']="Baca Fasilitas Dan Layanan";
	$id=$this->uri->segment(3);
	$data['data']=$this->mwellcome->baca_layanan($id)->result();//ngeload ke model
	$data['hasil']=$this->mwellcome->layanan($id)->result();//ngeload ke model 
	
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	//ngeload ke view
	$this->load->view('layout/atas',$data);
	$this->load->view('baca_layanan',$data);
	$this->load->view('layout/bawah');
	}
	function bc_dokter(){
	$data['judul']="Jadwal Dokter Spesialis";
	$id=$this->uri->segment(3);
	$data['data']=$this->mwellcome->baca_dokter($id)->result();//ngeload ke model
	$data['hasil']=$this->mwellcome->dokter($id)->result();//ngeload ke model 

	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	//ngeload ke view
	$this->load->view('layout/atas',$data);
	$this->load->view('bc_dokter',$data);
	$this->load->view('layout/bawah');
	}
	function bc_visi(){
	$data['judul']="Visi Dan Misi Puskesmas";
	$id=$this->uri->segment(3);
	$data['data']=$this->mwellcome->baca_visi($id)->result();//ngeload ke model
	$data['hasil']=$this->mwellcome->visi_($id)->result();//ngeload ke model 

	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	//ngeload ke view
	$this->load->view('layout/atas',$data);
	$this->load->view('bc_visi',$data);
	$this->load->view('layout/bawah');
	}

	function bc_sejarah(){
	$data['judul']="Sejarah Puskesmas";
	$id=$this->uri->segment(3);
	$data['data']=$this->mwellcome->baca_sejarah($id)->result();//ngeload ke model
	$data['hasil']=$this->mwellcome->sejarah_($id)->result();//ngeload ke model 

	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	//ngeload ke view
	$this->load->view('layout/atas',$data);
	$this->load->view('bc_sejarah',$data);
	$this->load->view('layout/bawah');
	}
	function bc_struktur(){
	$data['judul']="Sejarah Puskesmas";
	$id=$this->uri->segment(3);
	$data['data']=$this->mwellcome->baca_struktur($id)->result();//ngeload ke model
	$data['hasil']=$this->mwellcome->struktur_($id)->result();//ngeload ke model 

	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	//ngeload ke view
	$this->load->view('layout/atas',$data);
	$this->load->view('bc_struktur',$data);
	$this->load->view('layout/bawah');
	}
	
	function bc_sambutan(){
	$data['judul']="Kata Sambutan";
	$id=$this->uri->segment(3);
	$data['data']=$this->mwellcome->baca_sambutan($id)->result();//ngeload ke model
	$data['hasil']=$this->mwellcome->sambutan_($id)->result();//ngeload ke model 

	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	//ngeload ke view
	$this->load->view('layout/atas',$data);
	$this->load->view('bc_sambutan',$data);
	$this->load->view('layout/bawah');
	}
	
	function bc_agenda(){
	$data['judul']="Agenda Puskesmas";
	$id=$this->uri->segment(3);
	$data['data']=$this->mwellcome->bacaa_agenda($id)->result();//ngeload ke model
	$data['hasil']=$this->mwellcome->agenda_($id)->result();//ngeload ke model 

	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	//ngeload ke view
	$this->load->view('layout/atas',$data);
	$this->load->view('bc_agenda',$data);
	$this->load->view('layout/bawah');
	}
	
	public function jadwal_(){
	$data['judul']='Jadwal Poliklinik';
	$data['data']=$this->mwellcome->Jlayanan()->result();//ngeload ke model
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	$this->load->view('layout/atas',$data);
	$this->load->view('jadwal_',$data);
	$this->load->view('layout/bawah');
	}
	public function dokter(){
	$data['judul']='Data Dokter';
	$data['data']=$this->mwellcome->dokter_();//ngeload ke model
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar

	$this->load->view('layout/atas',$data);
	$this->load->view('dokter',$data);
	$this->load->view('layout/bawah');
	}
	public function tarif_layanan(){
	$data['judul']='Tarif Layanan';
	$data['tampil']=$this->mwellcome->caridata()->result();
	$data['fasilitas'] = $this->mwellcome->getFasilitas();
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
	$this->load->view('layout/atas',$data);
	$this->load->view('tarif_layanan',$data);
	$this->load->view('layout/bawah');
	}
	public function agenda(){
	$data['judul']='Agenda Puskesmas';
	$data['data']=$this->mwellcome->GetAgenda();
		//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar

	$this->load->view('layout/atas',$data);
	$this->load->view('agenda',$data);
	$this->load->view('layout/bawah');
	}
	
	public function galleri(){
	$data['judul']='Galleri Puskesmas';
	$data['data']=$this->mwellcome->GetGalleri()->result();//ngeload ke model
	//file menukanan
	$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
	$data['konter']='layout/konter'; //untuk di sidebar.php
	$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
		
	$this->load->view('layout/atas',$data);
	$this->load->view('galleri');
	$this->load->view('layout/bawah');
	}
	 public function pencarian()
	{
		$data['judul'] = 'Artikel';
		$judulartikel = $this->input->post('judul');
		if($judulartikel == NULL) {
		redirect('welcome');
		}
		// file
		$data['data'] = 'pencarian';
		$data['artikel'] = $this->mwellcome->pencarian($judulartikel);
		$data['katapencarian'] = $judulartikel;
		//file menukanan
		$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
		$data['konter']='layout/konter'; //untuk di sidebar.php
		$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar

		// view
		$this->load->view('layout/atas',$data);
		$this->load->view('pencarian',$data);
		$this->load->view('layout/bawah');   
	}
	 public function konsultasi()//penambahan data artikel
	{
		if($this->input->post('simpan')) {
			$this->mwellcome->Konsultasi(); 
			redirect('welcome/konsultasi');
		}

		$data['judul'] = 'Konsultasi Masalah';
		//file
		$data['tampil']=$this->mwellcome->Konsul()->result();
		//file menukanan
		$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
		$data['konter']='layout/konter'; //untuk di sidebar.php
		$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
	
		$this->load->view('layout/atas',$data);
		$this->load->view('konsultasi',$data);
		$this->load->view('layout/bawah',$data);
	}
	public function kontak()
	{
		
		$data['judul'] = 'Kontak Kami';
		//file menukanan
		$data['sidebar']='layout/sidebar';//untuk diketik di baca.php
		$data['konter']='layout/konter'; //untuk di sidebar.php
		$data['baris']=$this->mwellcome->tampilkan();//ngeload ke model untuk sidebar
		// view
		$this->load->view('layout/atas',$data);
		$this->load->view('kontak');
		$this->load->view('layout/bawah'); 
	}
	}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */