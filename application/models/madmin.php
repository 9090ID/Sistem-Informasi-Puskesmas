<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Madmin extends CI_Model { 

	var $guser;
	//---- get
	function __construct()
	{
		parent::__construct();
		$this->artikl = realpath(APPPATH.'../assets/'); 
		$this->struktur = realpath(APPPATH.'../assets/');
		$this->gheader = realpath(APPPATH.'../assets/');
		$this->galleri = realpath(APPPATH.'../assets/');
	//	$this->guser = realpath(APPPATH.'../assets/gambaruser/'); 
		$this->load->library('session');
		}
		 public function getArtikelId($id)
		{
		$this->db->where('idartikel',$id);
		return $this->db->get('tabelartikel')->row();
		}
		 public function getInfoId($id)
		{
		$this->db->where('id_info',$id);
		return $this->db->get('tabelinfo')->row();
		}
		 public function getPuskesmasId($id_pus)
		{
		$this->db->where('id_pus',$id_pus);
		return $this->db->get('tabel_master')->row();
		}
		 public function getKtsambutanId($id)
		{
		$this->db->where('id',$id);
		return $this->db->get('tabelkatasambutan')->row();
		}
		 public function getSejarahId($id)
		{
		$this->db->where('id',$id);
		return $this->db->get('tabelsejarah')->row();
		}
		 public function getVisiId($id)
		{
		$this->db->where('id',$id);
		return $this->db->get('tabelvisi')->row();
		}
		 public function getStrukturId($id)
		{
		$this->db->where('id',$id);
		return $this->db->get('tabelstruktur')->row();
		}
		 public function getSubFasilitas()
		{
		$q = $this->db->query('select * from tabelsubfasilitas');
		return $q;
		}
		public function getSubPuskesmass()
		{
		$q = $this->db->query('select * from tabel_master');
		return $q;
		}
		 public function getSubFasilitasId($id)
		{
		$this->db->where('id_judul',$id);
		return $this->db->get('tabelsubfasilitas')->row();
		}
		public function getDokter()
		{
		$q = $this->db->query('select * from tabeldokter');
		return $q;
		}
		 public function getDokterId($id)
		{
		$this->db->where('id',$id);
		return $this->db->get('tabeldokter')->row();
		}
		 public function getAgendaId($id)
		{
		$this->db->where('id',$id);
		return $this->db->get('tabelagenda')->row();
		}
		  public function getGambarHeader()
		{
		return $this->db->get('tabelcarousel');
		}
		 public function getGambarHeaderId($id)
		{
		$this->db->where('id_header',$id);
		return $this->db->get('tabelcarousel')->row();
		}
		 public function getFotoGalleriId($id)
		{
		$this->db->where('id',$id);
		return $this->db->get('tabelgalery')->row();
		}
		//batas get
		  public function tambahHeader()
		{
		$config = array(
						'upload_path' => $this->gheader.'/carousel/',
						'allowed_types' => 'jpg|jpeg|gif|png',
						'max_size' => 5120,
						'max_height' => 5120,
						'max_width' => 3000
					);
		$this->load->library('upload',$config);
		if($this->upload->do_upload()) {
			$files = $this->upload->data();
			$data = array(
						'urlgambar' => $files['file_name'],
						'namagambar' => $this->input->post('namagambar'),
						'tampil' => $this->input->post('tampil')
						);

			$this->db->insert('tabelcarousel',$data);
		}

	}
	 public function ubahHeader($id)
	{
		$data = array(
					'namagambar' => $this->input->post('namagambar'),
					'tampil' => $this->input->post('tampil')
					);

		$this->db->where('id_header',$id);
		$this->db->update('tabelcarousel',$data);
	}
	 public function hapusHeader($id)
		{
		$this->db->where('id_header',$id);
		$this->db->delete('tabelcarousel');
		}
		public function tambahSubFasilitas()
		{
		$data = array(
					'id_judul'  => $this->input->post('id_judul'),
					'judul'     => $this->input->post('judul'),
					'isi'       => $this->input->post('isi')
					);
		$this->db->insert('tabelsubfasilitas',$data);
		}
		 public function ubahSubFasilitas($id)
		{
		$data = array(
					'id_judul'       => $this->input->post('id_judul'),
					'judul'  => $this->input->post('judul'),
					'isi'  => $this->input->post('isi')
					);
		$this->db->where('id_judul',$id);
		$this->db->update('tabelsubfasilitas',$data);
		}
		 public function hapusSubFasilitas($id)
		{
		$this->db->where('id_judul',$id);
		$this->db->delete('tabelsubfasilitas');
		}
		public function getFasilitas()
		{
		return $this->db->get('tabelfasilitas');
		}
		
		 public function getFasilitasId($id)
		{
		$this->db->where('id',$id);
		return $this->db->get('tabelfasilitas')->row();
		}
		 public function tambahFasilitas()
		{
		$data = array(
					'id_judul'   => $this->input->post('id_judul'),
					'id_pus'   => $this->input->post('id_pus'),
					'unit'   => $this->input->post('unit'),
					'layanan'         => $this->input->post('layanan'),
					'hari'          => $this->input->post('hari'),
					'jam'    => $this->input->post('jam'),
					'harga'         => $this->input->post('harga')
					);
		$this->db->insert('tabelfasilitas',$data);
		}
		 public function ubahFasilitas($id)
		{
		$data = array(
					'id_judul'=> $this->input->post('id_judul'),
					'id_pus'=> $this->input->post('id_pus'),
					'unit'   => $this->input->post('unit'),
					'layanan'         => $this->input->post('layanan'),
					'hari'          => $this->input->post('hari'),
					'jam'    => $this->input->post('jam'),
					'harga'         => $this->input->post('harga')
					);
		$this->db->where('id',$id);
		$this->db->update('tabelfasilitas',$data);
		}
		  public function hapusFasilitas($id)
		{
		$this->db->where('id',$id);
		$this->db->delete('tabelfasilitas');
		}
		 public function tambahPuskesmas()
		{
		$data = array(
					'namapuskesmas'    => $this->input->post('namapuskesmas'),
					'alamatpuskesmas'         => $this->input->post('alamatpuskesmas'),
					'kepala'         => $this->input->post('kepala')
					);
		$this->db->insert('tabel_master',$data);
		}
		 public function getKonsulId($id)
		{
		$this->db->where('id_konsul',$id);
		return $this->db->get('tabelkonsul')->row();
		}
		public function tambahArtikel()
		{
		$config = array(
						'upload_path' => $this->artikl.'/artikels/',
						'allowed_types' => 'jpg|jpeg|gif|png',
						'max_size' => 5120,
						'max_height' => 5120,
						'max_width' => 3000
					);
		$this->load->library('upload',$config);
		if($this->upload->do_upload()) {
			$files = $this->upload->data();
			$data = array(
						'gambar' => $files['file_name'],
						'penulis' => $this->input->post('penulis'),
						'judul' => $this->input->post('judul'),
						'isi' => $this->input->post('isi'),
						'tanggalupdate' => $this->input->post('tanggalupdate')
						);

			$this->db->insert('tabelartikel',$data);
		}
		}
		 public function ubahArtikel($id)
		{
		$data = array(
					'penulis' => $this->input->post('penulis'),
					'judul'=> $this->input->post('judul'),
					'isi'          => $this->input->post('isi'),
					'tanggalupdate'          => $this->input->post('tanggalupdate'),
					);
		$this->db->where('idartikel',$id);
		$this->db->update('tabelartikel',$data);
		}
		
		 public function hapusArtikel($id)
		{  
		$this->db->where('idartikel',$id);
		$this->db->delete('tabelartikel');
		}
		 public function ubahPuskesmas($id_pus)
		{
		$data = array(
					'namapuskesmas' => $this->input->post('namapuskesmas'),
					'alamatpuskesmas'=> $this->input->post('alamatpuskesmas'),
						'kepala'         => $this->input->post('kepala'),
					);
		$this->db->where('id_pus',$id_pus);
		$this->db->update('tabel_master',$data);
		}
		public function tambahKtsambutan()
		{
		$config = array(
						'upload_path' => $this->artikl.'/artikels/',
						'allowed_types' => 'jpg|jpeg|gif|png',
						'max_size' => 5120,
						'max_height' => 5120,
						'max_width' => 3000
					);
		$this->load->library('upload',$config);
		if($this->upload->do_upload()) {
			$files = $this->upload->data();
			$data = array(
						'id_pus' => $this->input->post('id_pus'),
						'image' => $files['file_name'],
						'isi' => $this->input->post('isi'),
						);

			$this->db->insert('tabelkatasambutan',$data);
		}
		}
		 public function ubahKtsambutan($id)
		{
		$data = array(
					'id_pus' => $this->input->post('id_pus'),
					'isi'  => $this->input->post('isi'),
					);
		$this->db->where('id',$id);
		$this->db->update('tabelkatasambutan',$data);
		}
		 public function hapusKtsambutan($id)
		{  
		$this->db->where('id',$id);
		$this->db->delete('tabelkatasambutan');
		}
		public function tambahSejarah()
		{
			$data = array(
						'id_pus' => $this->input->post('id_pus'),
						'isi' => $this->input->post('isi'),
						);

			$this->db->insert('tabelsejarah',$data);
		}
		 public function ubahSejarah($id)
		{
		$data = array(
					'id_pus' => $this->input->post('id_pus'),
					'isi'  => $this->input->post('isi'),
					);
		$this->db->where('id',$id);
		$this->db->update('tabelsejarah',$data);
		}
		 public function hapusSejarah($id)
		{  
		$this->db->where('id',$id);
		$this->db->delete('tabelsejarah');
		}
		public function tambahVisi()//tambah visi dan misi
		{
			$data = array(
						'id_pus' => $this->input->post('id_pus'),
						'isi' => $this->input->post('isi'),
						);

			$this->db->insert('tabelvisi',$data);
		}
		 public function ubahVisi($id)
		{
		$data = array(
					'id_pus' => $this->input->post('id_pus'),
					'isi'  => $this->input->post('isi'),
					);
		$this->db->where('id',$id);
		$this->db->update('tabelvisi',$data);
		}
		 public function hapusVisi($id)
		{  
		$this->db->where('id',$id);
		$this->db->delete('tabelvisi');
		}
		public function tambahStruktur()//tambah struktur
		{
		$config = array(
						'upload_path' => $this->struktur.'/strukturs/',
						'allowed_types' => 'jpg|jpeg|gif|png',
						'max_size' => 5120,
						'max_height' => 5120,
						'max_width' => 3000
					);
		$this->load->library('upload',$config);
		if($this->upload->do_upload()) {
			$files = $this->upload->data();
			$data = array(
				'id_pus' => $this->input->post('id_pus'),
						'image' => $files['file_name'],
						'namaimage' => $this->input->post('namaimage'),
						);

			$this->db->insert('tabelstruktur',$data);
		}
		}
		 public function hapusStruktur($id)
		{  
		$this->db->where('id',$id);
		$this->db->delete('tabelstruktur');
		}
		 public function ubahKonsul($id)
		{
		$data = array(
						'nama' => $this->input->post('nama'),
						'usia' => $this->input->post('usia'),
						'jk' => $this->input->post('jk'),
						'subjek' => $this->input->post('subjek'),
						'pertanyaan' => $this->input->post('pertanyaan'),
						'nama_jawaban' => $this->input->post('nama_jawaban'),
						'jawaban' => $this->input->post('jawaban'),
					);
		$this->db->where('id_konsul',$id);
		$this->db->update('tabelkonsul',$data);
		}
		 public function hapusKonsul($id)
		{  
		$this->db->where('id_konsul',$id);
		$this->db->delete('tabelkonsul');
		}
		
		public function tambahAgenda()
		{
			$data = array(
						'id_pus' => $this->input->post('id_pus'),
						'judul' => $this->input->post('judul'),
						'tanggal' => $this->input->post('tanggal'),
						'tanggal2' => $this->input->post('tanggal2'),
						'tempat_pel' => $this->input->post('tempat_pel'),
						'keterangan' => $this->input->post('keterangan'),
						'penulis' => $this->input->post('penulis'),
						);

			$this->db->insert('tabelagenda',$data);
		}
		 public function ubahAgenda($id)
		{
		$data = array(
						'id_pus' => $this->input->post('id_pus'),
						'judul' => $this->input->post('judul'),
						'tanggal' => $this->input->post('tanggal'),
						'tanggal2' => $this->input->post('tanggal2'),
						'tempat_pel' => $this->input->post('tempat_pel'),
						'keterangan' => $this->input->post('keterangan'),
						'penulis' => $this->input->post('penulis'),
					);
		$this->db->where('id',$id);
		$this->db->update('tabelagenda',$data);
		}
		 public function hapusAgenda($id)
		{  
		$this->db->where('id',$id);
		$this->db->delete('tabelagenda');
		}
		 public function tambahGalleri()
		{
		$config = array(
						'upload_path' => $this->galleri.'/gambargalleri/',
						'allowed_types' => 'jpg|jpeg|gif|png',
						'max_size' => 5120,
						'max_height' => 5120,
						'max_width' => 3000
					);
		$this->load->library('upload',$config);
		if($this->upload->do_upload()) {
			$files = $this->upload->data();
			$data = array(
						'urlfoto' => $files['file_name'],
						'nama_foto' => $this->input->post('nama_foto'),
						'keterangan' => $this->input->post('keterangan')
						);

			$this->db->insert('tabelgalery',$data);
		}
		}
	 public function hapusGalleri($id)
		{
		$this->db->where('id',$id);
		$this->db->delete('tabelgalery');
		}
		public function tambahInfo()
		{
		$config = array(
						'upload_path' => $this->artikl.'/artikels/',
						'allowed_types' => 'jpg|jpeg|gif|png',
						'max_size' => 5120,
						'max_height' => 5120,
						'max_width' => 3000
					);
		$this->load->library('upload',$config);
		if($this->upload->do_upload()) {
			$files = $this->upload->data();
			$data = array(
						'gambar' => $files['file_name'],
						'penulis' => $this->input->post('penulis'),
						'judul' => $this->input->post('judul'),
						'isi' => $this->input->post('isi'),
						'tanggal' => $this->input->post('tanggal')
						);

			$this->db->insert('tabelinfo',$data);
		}
		}
		 public function ubahInfo($id)
		{
		$data = array(
					'penulis' => $this->input->post('penulis'),
					'judul'=> $this->input->post('judul'),
					'isi'          => $this->input->post('isi'),
					'tanggal'          => $this->input->post('tanggal'),
					);
		$this->db->where('id_info',$id);
		$this->db->update('tabelinfo',$data);
		}
		 public function hapusInfo($id)
		{  
		$this->db->where('id_info',$id);
		$this->db->delete('tabelinfo');
		}
		
		public function tambahDokter()
		{
		$data = array(
					'id_pus' => $this->input->post('id_pus'),
					'nama'       => $this->input->post('nama'),
					'jadwal_tugas'  => $this->input->post('jadwal_tugas'),
					'spesialis'  => $this->input->post('spesialis')
					);
		$this->db->insert('tabeldokter',$data);
		}
		 public function ubahDokter($id)
		{
		$data = array(
					'id_pus' => $this->input->post('id_pus'),
					'nama'       => $this->input->post('nama'),
					'jadwal_tugas'  => $this->input->post('jadwal_tugas'),
					'spesialis'  => $this->input->post('spesialis')
					);
		$this->db->where('id',$id);
		$this->db->update('tabeldokter',$data);
		}
		 public function hapusDokter($id)
		{
		$this->db->where('id',$id);
		$this->db->delete('tabeldokter');
		}
		 public function hapusPuskesmas($id_pus)
		{
		$this->db->where('id_pus',$id_pus);
		$this->db->delete('tabel_master');
		}
}
