<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{ 
	parent::__construct();
		$this->load->library(array('session','form_validation','pagination'));
		if($this->session->userdata('NIP-ADMIN') != TRUE && 
		$this->session->userdata('PASS-ADMIN') != TRUE && 
		$this->session->userdata('isLOGIN') != TRUE) {
		redirect('clogin');//redirect login atau menyesuaikan loginnya
		}
		$this->load->helper(array('url','form','text','date'));//me-load ke helper
		$this->load->database();//me-load database
		$this->load->model('madmin');//me-load ke models
	}
//----------------------------------------------MENAMPILKAN DATA SELURUH HALAMAN ADMIN----------------------------------//

//----------------------------------------------Menampilkan Data home---------------------------------------------------//
	public function index() 
	{   
		$data['judul'] = 'Home';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/home');
		$this->load->view('admin/footer');		
	}
//----------------------------------------------Menampilkan Data Artikel------------------------------------------------//
	public function dataartikel() 
	{   
		$data['judul'] = 'Data Artikel';
		$config = array(
						'base_url' => base_url().'index.php/admin/dataartikel/',
						'total_rows' => $this->db->count_all('tabelartikel'),
						'uri_segment' => 3,
						'per_page' => 7,//jumlah data yang ditampilkan perhalaman
						'num_links' => 3
						);
		//pagination
		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$this->db->order_by('idartikel','DESC');//mySQL, data yang terbaru urutan di tampilan
		$data['hasil'] = $this->db->get('tabelartikel',$config['per_page'],$this->uri->segment(3));
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/artikel/dataartikel',$data);
		$this->load->view('admin/footer',$data);
	}
	//----------------------------------------------Menampilkan Data Artikel------------------------------------------------//
	public function datapuskesmas() 
	{   
		$data['judul'] = 'Data Puskesmas';
		$config = array(
						'base_url' => base_url().'index.php/admin/datapuskesmas/',
						'total_rows' => $this->db->count_all('tabel_master'),
						'uri_segment' => 3,
						'per_page' => 7,//jumlah data yang ditampilkan perhalaman
						'num_links' => 3
						);
		//pagination
		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$this->db->order_by('id_pus','DESC');//mySQL, data yang terbaru urutan di tampilan
		$data['hasil'] = $this->db->get('tabel_master',$config['per_page'],$this->uri->segment(3));
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/puskesmas/datapuskesmas',$data);
		$this->load->view('admin/footer',$data);
	}
//----------------------------------------------Menampilkan Data Profil------------------------------------------------//
	public function dataprofil() //data kata sambutan(data profil)
	{   
		$data['judul'] = 'Data Profil';
		$data['hasil'] = $this->db->get('tabelkatasambutan');
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/profil/dataprofil',$data);
		$this->load->view('admin/footer',$data);
	}
//----------------------------------------------Menampilkan Data Sejarah------------------------------------------------//
	public function datasejarah() //data sejarah
	{   
		$data['judul'] = 'Data Sejarah';
		$data['hasil'] = $this->db->get('tabelsejarah');
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sejarah/datasejarah',$data);
		$this->load->view('admin/footer',$data);
	}
//----------------------------------------------Menampilkan Data Visi Dan Misi-------------------------------------------//
	public function datavisi() //data Visi Dan Misi
	{   
		$data['judul'] = 'Data Visi Dan Misi';
		$data['hasil'] = $this->db->get('tabelvisi');
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/visi/datavisi',$data);
		$this->load->view('admin/footer',$data);
	}
//----------------------------------------------Menampilkan data Struktur------------------------------------------------//
	public function datastruktur() 
	{   
		$data['judul'] = 'Data Struktur';
		$data['hasil'] = $this->db->get('tabelstruktur');
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/struktur/datastruktur',$data);
		$this->load->view('admin/footer',$data);
	}
//----------------------------------------------MenampilkanSub Fasilitas------------------------------------------------//
	 public function subfasilitas()
	{
		$data['judul'] = 'Bagian Fasilitas';
		$data['hasil'] = $this->madmin->getSubFasilitas();
		//menampilkan pada view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/fasilitas/subfasilitas',$data);
		$this->load->view('admin/footer');
	}
	//----------------------------------------------Menampilkan Data Dokter------------------------------------------------//
		public function dokter() 
	{   
		$data['judul'] = 'Data Dokter';
		$config = array(
						'base_url' => base_url().'index.php/admin/dokter/',
						'total_rows' => $this->db->count_all('tabeldokter'),
						'uri_segment' => 3,
						'per_page' => 7,//menampilkan jumlah data perhalaman
						'num_links' => 3
						);
		//pagination
		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$this->db->order_by('id','DESC');//mySQL, data yang terbaru urutan di tampilan
		$data['hasil'] = $this->db->get('tabeldokter',$config['per_page'],$this->uri->segment(3));
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/datadokter/dokter',$data);
		$this->load->view('admin/footer',$data);
	}
//----------------------------------------------Menampilkan Data Fasilitas------------------------------------------------//
	public function fasilitas()
	{
		$data['judul'] = 'Fasilitas Dan Pelayanan';
		//file
		$data['hasil'] = $this->madmin->getFasilitas();
		// view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/datafasilitas/fasilitas',$data);
		$this->load->view('admin/footer',$data);
	}
//----------------------------------------------Menampilkan Data artikel informasi------------------------------------------------//
		public function datainfo() 
	{   
		$data['judul'] = 'Data Informasi';
		$config = array(
						'base_url' => base_url().'index.php/admin/datainfo/',
						'total_rows' => $this->db->count_all('tabelinfo'),
						'uri_segment' => 3,
						'per_page' => 7,//menampilkan jumlah data perhalaman
						'num_links' => 3
						);
		//pagination
		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$this->db->order_by('id_info','DESC');//mySQL, data yang terbaru urutan di tampilan
		$data['hasil'] = $this->db->get('tabelinfo',$config['per_page'],$this->uri->segment(3));
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/informasi/datainfo',$data);
		$this->load->view('admin/footer',$data);
	}
//----------------------------------------------Menampilkan Data Agenda------------------------------------------------//
	public function dataagenda() 
	{   
		$data['judul'] = 'Data Agenda';
		$config = array(
						'base_url' => base_url().'index.php/admin/dataagenda/',
						'total_rows' => $this->db->count_all('tabelagenda'),
						'uri_segment' => 3,
						'per_page' => 7,
						'num_links' => 3
						);
		//pagination
		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$this->db->order_by('id','DESC');//mySQL, data yang terbaru urutan di tampilan
		$data['hasil'] = $this->db->get('tabelagenda',$config['per_page'],$this->uri->segment(3));
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/agenda/dataagenda',$data);
		$this->load->view('admin/footer',$data);
	}
//----------Menampilkan Data carousel atau foto untuk diletakkan pada menu utama animasi--------------------------------//
	public function header()
	{
		$data['judul'] = 'Header';
		$data['hasil'] = $this->madmin->getGambarHeader();//load ke madmin models
		// view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/header/header',$data);
		$this->load->view('admin/footer');
	}
//----------------------------------------------Menampilkan Data galleri------------------------------------------------//
	  public function datagalleri()
	{
		$data['judul'] = 'Data Galleri';
		$config = array(
						'base_url' => base_url().'index.php/admin/datagalleri/',
						'total_rows' => $this->db->count_all('tabelgalery'),
						'uri_segment' => 3,
						'per_page' => 7,
						'num_links' => 3
						);
		//pagination
		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$this->db->order_by('id','DESC');//mySQL, data yang terbaru urutan di tampilan
		$data['hasil'] = $this->db->get('tabelgalery',$config['per_page'],$this->uri->segment(3));
		// view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/galleri/datagalleri',$data);
		$this->load->view('admin/footer');
	}
//----------------------------------------------Menampilkan Data Konsultasi------------------------------------------------//
	public function datakonsul() 
	{   
		$data['judul'] = 'Data Konsultasi';
		$config = array(
						'base_url' => base_url().'index.php/admin/datakonsul/',
						'total_rows' => $this->db->count_all('tabelkonsul'),
						'uri_segment' => 3,
						'per_page' => 7,
						'num_links' => 3
						);
		//pagination
		$config['full_tag_open'] = '<div><ul class="pagination">';
		$config['full_tag_close'] = '</ul></div>';

		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo;';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		$this->db->order_by('id_konsul','DESC');//mySQL, data yang terbaru urutan di tampilan
		$data['hasil'] = $this->db->get('tabelkonsul',$config['per_page'],$this->uri->segment(3));
		//menampilkan view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/konsul/datakonsul',$data);
		$this->load->view('admin/footer',$data);
	}
//--------------------------Coding Menambahkan Seluruh Data Di halaman Admin--------------------------------//

//------------------------------------Menambahkan Data Artikel----------------------------------------------//
	 public function tambahartikel()
	{
	$data['judul'] = 'Tambah Artikel';
	if($this->input->post('simpan')) {
		$this->madmin->tambahArtikel(); 
			redirect('admin/dataartikel');
			}
		$this->load->view('admin/header',$data);
		$this->load->view('admin/artikel/tambahartikel');
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data Kata Sambutan----------------------------------------//
	 public function tambahktsambutan()
	{
		$data['judul'] = 'Tambah Kata Sambutan';
		if($this->input->post('simpan')) {
			$this->madmin->tambahKtsambutan(); 
			redirect('admin/dataprofil');
		}
		$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
		$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/profil/tambahktsambutan',$data);
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data Sejarah---------------------------------------------//
	 public function tambahsejarah()//penambahan sejarah
	{
		$data['judul'] = 'Tambah Sejarah';
		if($this->input->post('simpan')) {
			$this->madmin->tambahSejarah(); 
			redirect('admin/datasejarah');
		}
		$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sejarah/tambahsejarah');
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data Visi Dan Misi----------------------------------------//
 public function tambahvisi()//penambahan Visi Dan Misi
	{
		$data['judul'] = 'Tambah Visi Dan Misi';
		if($this->input->post('simpan')) {
			$this->madmin->tambahVisi(); 
			redirect('admin/datavisi');
		}
		$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/visi/tambahvisi');
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data Struktur---------------------------------------------//
	 public function tambahstruktur()//penambahan data artikel
	{
		$data['judul'] = 'Tambah Struktur';
		if($this->input->post('simpan')) {
			$this->madmin->tambahStruktur(); 
			redirect('admin/datastruktur');
		}
		$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
		$this->load->view('admin/header',$data);
		$this->load->view('admin/struktur/tambahstruktur');
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data SubFasilitas---------------------------------------------//
 	 public function tambahsubfasilitas()
	{
		$data['judul'] = 'Tambah Sub Fasilitas';
		if($this->input->post('simpan')) {
			$this->form_validation->set_rules('judul','judul','required');
			$this->form_validation->set_rules('isi','isi','required');
			if($this->form_validation->run()) {
				$this->madmin->tambahSubFasilitas();
				redirect('admin/subfasilitas');
			}
		}
		
		$data['data'] = $this->madmin->getSubFasilitas();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/fasilitas/tambahsubfasilitas',$data);
		$this->load->view('admin/footer',$data);
	}	
//------------------------------------Menambahkan Data Fasilitas-------------------------------------------------//
 	 public function tambahfasilitas()
	{
		$data['judul'] = 'Tambah Data Fasilitas';
		if($this->input->post('simpan')) {
			$this->form_validation->set_rules('unit','unit','required');
			$this->form_validation->set_rules('layanan','layanan','required');
			$this->form_validation->set_rules('hari','hari','required');
			$this->form_validation->set_rules('jam','jam','required');
			$this->form_validation->set_rules('harga','harga','required|integer');
			if($this->form_validation->run()) {
				$this->madmin->tambahFasilitas();
				redirect('admin/fasilitas');
			}
		}
		$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
		$data['subfasilitas'] = $this->madmin->getSubFasilitas();//mengambil data relasi dari tabel sub fasilitas
		//view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/datafasilitas/tambahfasilitas',$data);
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data ARTIKEL Informasi-------------------------------------------//	 
	 public function tambahinfo()//penambahan data artikel
	{
		$data['judul'] = 'Tambah Artikel Informasi';
		if($this->input->post('simpan')) {
			$this->madmin->tambahInfo(); 
			redirect('admin/datainfo');
		}
		//view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/informasi/tambahinfo');
		$this->load->view('admin/footer',$data);
	}
	//------------------------------------Menambahkan Data PUSKESMAS-------------------------------------------//	 
	 public function tambahpuskesmas()//penambahan data artikel
	{
		$data['judul'] = 'Tambah Puskesmas';
		if($this->input->post('simpan')) {
			$this->madmin->tambahPuskesmas(); 
			redirect('admin/datapuskesmas');
		}
		//view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/puskesmas/tambahpuskesmas');
		$this->load->view('admin/footer',$data);
	}
	//------------------------------------Menambahkan Data Dokter-------------------------------------------//	 
	 public function tambahdokter()//penambahan data artikel
	{
		$data['judul'] = 'Tambah Dokter';
		if($this->input->post('simpan')) {
			$this->madmin->tambahDokter(); 
			redirect('admin/dokter');
		}
		$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
		//view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/datadokter/tambahdokter',$data);
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data AGENDA----------------------------------------------------//		
	 public function tambahagenda()//penambahan data artikel
	{
		$data['judul'] = 'Tambah Artikel';
		if($this->input->post('simpan')) {
			$this->madmin->tambahAgenda(); 
			redirect('admin/dataagenda');
		}
			$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
		//VIEW
		$this->load->view('admin/header',$data);
		$this->load->view('admin/agenda/tambahagenda');
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data Header atau carousel----------------------------------------//		
	 public function tambahheader()
	{
		$data['judul'] = 'Tambah Header';
		if($this->input->post('simpan')) {
			$this->madmin->tambahHeader();
			redirect('admin/header');
		}
		//view
		$this->load->view('admin/header',$data);
		$this->load->view('admin/header/tambahheader',$data);
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Menambahkan Data Galley-----------------------------------------------------//
	 public function tambahgalleri()
	{
		$data['judul'] = 'Tambah Galleri';
		if($this->input->post('simpan')) {
			$this->madmin->tambahGalleri();
			//$this->session->set_flashdata('hasilheader','Gambar berhasil ditambah'); 
			redirect('admin/datagalleri');
		}
		$this->load->view('admin/header',$data);
		$this->load->view('admin/galleri/tambahgalleri',$data);
		$this->load->view('admin/footer',$data);
	}
//------------------------------------Coding Mengubah Seluruh data halaman admin------------------------------------//

//-------------------------------------------Ubah Data Artikel-----------------------------------------------------//
	public function ubahArtikel($id)//ubah artikel
	{
		if($_POST == NULL) {
			$data['judul'] = 'Update Artikel';
			 $data['hasil'] = $this->madmin->getArtikelId($id);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/artikel/ubahartikel');
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahArtikel($id);//load ke model
				redirect('admin/dataartikel');//kembali ke halaman artikel
		}
	}
//-------------------------------------------Ubah Data KataSambutan-----------------------------------------------------//
	 public function ubahKtsambutan($id)//ubah kata sambutan
	{
		if($_POST == NULL) {
			 $data['judul'] = 'Update Kata Sambutan';
			 $data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
			 $data['hasil'] = $this->madmin->getKtsambutanId($id);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/profil/ubahktsambutan',$data);
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahKtsambutan($id);//load ke model
				redirect('admin/dataprofil');//kembali ke halaman kata sambutan
		}
	}
//-------------------------------------------Ubah Data Sejarah-----------------------------------------------------//
	 public function ubahSejarah($id)//ubah sejarah
	{
		if($_POST == NULL) {
			 $data['judul'] = 'Ubah Sejarah';
			 $data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
			 $data['hasil'] = $this->madmin->getSejarahId($id);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sejarah/ubahsejarah');
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahSejarah($id);//load ke model
				redirect('admin/datasejarah');//kembali ke halaman kata sambutan
		}
	}
	//-------------------------------------------Ubah Data Dokter-----------------------------------------------------//
	 public function ubahdokter($id)
	{
		if($_POST == NULL) {
			 $data['judul'] = 'Ubah Data Dokter';
			 $data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
			 $data['hasil'] = $this->madmin->getDokterId($id);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/datadokter/ubahdokter',$data);
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahDokter($id);//load ke model
				redirect('admin/dokter');//kembali ke halaman kata sambutan
		}
	}
//-------------------------------------------Ubah Data Visi Misi-----------------------------------------------------//
	 public function ubahVisi($id)//ubah Visi Dan Misi
	{
		if($_POST == NULL) {
			$data['judul'] = 'UbahVisi Dan Misi';
			$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
			 $data['hasil'] = $this->madmin->getVisiId($id);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/visi/ubahvisi');
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahVisi($id);//load ke model
				redirect('admin/datavisi');//kembali ke halaman kata sambutan
		}
	}
//-------------------------------------------Ubah Data Sub Fasilitas-----------------------------------------------------//	
     public function ubahsubfasilitas($id)
	{
		if($_POST == NULL) {
			$data['judul'] = 'Ubah Sub Fasilitas';
			$data['hasil'] = $this->madmin->getSubFasilitasId($id);
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/fasilitas/ubahsubfasilitas',$data);
			$this->load->view('admin/footer',$data);
		} else {
				$this->madmin->ubahSubFasilitas($id);
				redirect('admin/subfasilitas');
		}
	}
//-------------------------------------------Ubah Data  Fasilitas-------------------------------------------------------//	
 public function ubahFasilitas($id)
	{
		if($_POST == NULL) {
			$data['judul'] = 'Ubah Data Fasilitas';
			$data['subfasilitas'] = $this->madmin->getSubFasilitas();
			$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
			$data['hasil'] = $this->madmin->getFasilitasId($id);
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/datafasilitas/ubahfasilitas',$data);
			$this->load->view('admin/footer',$data);

		} else {
				$this->madmin->ubahFasilitas($id);
				redirect('admin/fasilitas');
		}
	}
//-------------------------------------------Ubah Data Artikel Info----------------------------------------------------//		
	 public function ubahInfo($id)//ubah artikel
	{
		if($_POST == NULL) {
			$data['judul'] = 'Update Informasi';
			 $data['hasil'] = $this->madmin->getInfoId($id);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/informasi/ubahinfo');
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahInfo($id);//load ke model
				redirect('admin/datainfo');//kembali ke halaman artikel
		}
	}
//-------------------------------------------Ubah Data Agenda----------------------------------------------------//		
	 public function ubahAgenda($id)//ubah artikel
	{
		if($_POST == NULL) {
			$data['judul'] = 'Update Agenda';
				$data['subpuskesmas'] = $this->madmin->getSubPuskesmass();//mengambil data relasi 
			 $data['hasil'] = $this->madmin->getAgendaId($id);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/agenda/ubahagenda');
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahAgenda($id);//load ke model
				redirect('admin/dataagenda');//kembali ke halaman artikel
		}
	}
//-------------------------------------------Ubah Data Carousel----------------------------------------------------//	
	 public function ubahheader($id)
	{
		if($_POST == NULL) {
			$data['judul'] = 'Ubah Gambar Header';
			$data['hasil'] = $this->madmin->getGambarHeaderId($id);//load ke models
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/header/ubahheader',$data);
			$this->load->view('admin/footer');

		} else {
				$this->madmin->ubahHeader($id);
				redirect('admin/header');
		}   
	}
//-------------------------------------------Ubah Data Konsultasi--------------------------------------------------//
	 public function ubahKonsul($id)//ubah Konsultasi
	{
		if($_POST == NULL) {
			$data['judul'] = 'Jawab Konsultasi';
			 $data['hasil'] = $this->madmin->getKonsulId($id);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/konsul/ubahkonsul');
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahKonsul($id);//load ke model
				redirect('admin/datakonsul');//kembali ke halaman artikel
		}
	}
	//-------------------------------------------Ubah Data Konsultasi--------------------------------------------------//
	 public function ubahpuskesmas($id_pus)//ubah Konsultasi
	{
		if($_POST == NULL) {
			$data['judul'] = 'Edit Puskesmas';
				
			 $data['hasil'] = $this->madmin->getPuskesmasId($id_pus);//load ke model
			// view
			$this->load->view('admin/header',$data);
			$this->load->view('admin/puskesmas/ubahpuskesmas');
			$this->load->view('admin/footer');
		} else {
				$this->madmin->ubahPuskesmas($id_pus);//load ke model
				redirect('admin/datapuskesmas');//kembali ke halaman artikel
		}
	}
//-------------------------------------------Coding Menghapus Data--------------------------------------------------//

//-------------------------------------------Hapus Data Artikel--------------------------------------------------//
	 public function hapusArtikel($idartikel)
	{
		$this->madmin->hapusArtikel($idartikel);//load ke model
		redirect('admin/dataartikel'); 
	}
//-------------------------------------------Hapus Data Carousel--------------------------------------------------// 
	 public function hapusheader($id)
	{
		$this->madmin->hapusHeader($id);//load ke model
		redirect('admin/header'); 
	}
//-------------------------------------------Hapus Data Sambutan--------------------------------------------------//
	 public function hapusKtsambutan($id)
	{
		$this->madmin->hapusKtsambutan($id);//load ke model
		redirect('admin/dataprofil'); 
	}
//-------------------------------------------Hapus Data Sejarah----------------------------------------------------//
	 public function hapusSejarah($id)
	{
		$this->madmin->hapusSejarah($id);//load ke model
		redirect('admin/datasejarah'); 
	}
	//-------------------------------------------Hapus Data Dokter----------------------------------------------------//
	 public function hapusDokter($id)
	{
		$this->madmin->hapusDokter($id);//load ke model
		redirect('admin/dokter'); 
	}
//-------------------------------------------Hapus Data Visi-------------------------------------------------------//
	 public function hapusVisi($id)
	{
		$this->madmin->hapusVisi($id);//load ke model
		redirect('admin/datavisi'); 
	}
//-------------------------------------------Hapus Data Struktur---------------------------------------------------//
	 public function hapusStruktur($id)
	{
		$this->madmin->hapusStruktur($id);//load ke model
		redirect('admin/datastruktur'); 
	}
//-------------------------------------------Hapus Data SubFasilitas-----------------------------------------------//	
	  public function hapusSubFasilitas($id)
	{
		$this->madmin->hapusSubFasilitas($id);
		redirect('admin/subfasilitas');
	}
//-------------------------------------------Hapus Data Fasilitas--------------------------------------------------//	
	 public function hapusFasilitas($id)
	{
		$this->madmin->hapusFasilitas($id);
		redirect('admin/fasilitas');
	}
//-------------------------------------------Hapus Data Konsul------------------------------------------------------//
	 public function hapusKonsul($id_konsul)
	{
		$this->madmin->hapusKonsul($id_konsul);//load ke model
		redirect('admin/datakonsul'); 
	}
//-------------------------------------------Hapus Data Agenda--------------------------------------------------//
	 public function hapusAgenda($id)
	{
		$this->madmin->hapusAgenda($id);//load ke model
		redirect('admin/dataagenda'); 
	}
//-------------------------------------------Hapus Data Galleri--------------------------------------------------//	
	 public function hapusgalleri($id)
	{
		$this->madmin->hapusGalleri($id);//load ke model
		redirect('admin/datagalleri'); 
	}
//-------------------------------------------Hapus Data Informasi Artikel----------------------------------------//
	 public function hapusInfo($id_info)
	{
		$this->madmin->hapusInfo($id_info);//load ke model
		redirect('admin/datainfo'); 
	}
	//-------------------------------------------Hapus Data Puskesmas----------------------------------------//
	 public function hapuspuskesmas($id_pus)
	{
		$this->madmin->hapusPuskesmas($id_pus);//load ke model
		redirect('admin/datapuskesmas'); 
	}
}//penutup pembuka perma kali CI_CONTROLLER
