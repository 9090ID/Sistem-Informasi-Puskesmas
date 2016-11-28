<?php
class Mwellcome extends ci_model
{
		function tampil(){
		$query=$this->db->get('tabelartikel');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
 		}
 		}//batas menampilkan artikel readmore
		
		function baca_artikel($id){
		$this->db->where('idartikel',$id);
		$query=$this->db->get('tabelartikel');
		return $query->result();
		}//coding menampilkan setelah click readmore
		
		function tampilagenda(){
		$query=$this->db->get('tabelagenda');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
		}
		}
		
		function bacaagenda($id){
		$this->db->where('id',$id);
		$query=$this->db->get('tabelagenda');
		return $query->result();
		}
		
		public function baca($limit,$start){
		$this->db->order_by('idartikel','DESC');
		$this->db->limit($limit,$start);
		$query=$this->db->get_where('tabelartikel');
		return $query->result();
		}
		public function Jlayanan(){
		return $this->db->get('tabelfasilitas');
		}
		public function Konsul(){
		$this->db->limit(6);
		return $this->db->get('tabelkonsul');
		}
		function dokter_(){
		$query=$this->db->get('tabel_master');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
		}
		}
		function sejarah(){
		$query=$this->db->get('tabel_master');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
		}
		}
		function Struktur(){
		$query=$this->db->get('tabel_master');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
		}
		}
		function visi(){
		$query=$this->db->get('tabel_master');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
		}
		}
		function baca_dokter($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabeldokter');
		}
		function baca_visi($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabel_master');
		}
		function visi_($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabelvisi');
		}
		function agenda_($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabelagenda');
		}
		function bacaa_agenda($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabel_master');
		}
		function baca_struktur($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabel_master');
		}
		function struktur_($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabelstruktur');
		}
		function baca_sambutan($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabel_master');
		}
	
		function sambutan(){
		$query=$this->db->get('tabel_master');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
		}
		}
		function GetAgenda(){
		$query=$this->db->get('tabel_master');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
		}
		}
		function baca_sejarah($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabel_master');
		}
		function sejarah_($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabelsejarah');
		}
		function Tlayanan(){
		$query=$this->db->get('tabelfasilitas');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
 		}
 		}//batas menampilkan halaman fasilitas dan layanan sebelum readmore
		function baca_layanan($id){
		$this->db->where('id_judul',$id);
		return $this->db->get('tabelfasilitas');
		}//menampilkan readmore yang telah di click
		public function baca_pag($limit,$start){
		$this->db->order_by('id_judul','DESC');
		$this->db->limit($limit,$start);
		$query=$this->db->get_where('tabelsubfasilitas');
		return $query->result();
		}//pagging
		public function baca_num_rows(){
		return $this->db->get('tabelartikel')->num_rows();
		}//pagging fasilitas dan layanan
		public function num_rows(){
		return $this->db->get('tabelsubfasilitas')->num_rows();
		}//pagging fasilitas dan layanan
		function layanan($id){
		$this->db->where('id_judul',$id);
		return $this->db->get('tabelsubfasilitas');
		}//menampilkan data yang telah readmore pada fasilitas dan layanan
		function dokter($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabel_master');
		}//menampilkan data spesialis
		public function getFasilitas(){
		return $this->db->get('tabelfasilitas');
		}
		function sambutan_($id){
		$this->db->where('id_pus',$id);
		return $this->db->get('tabelkatasambutan');
		}
		public function caridata(){
		 $l = $this->input->POST ('layanan');
		$c = $this->input->POST ('cari');
		$this->db->like('layanan',$l, $c);
		return $this->db->get ('tabelfasilitas');
		}
		public function GetGalleri(){
		return $this->db->get('tabelgalery');
		}
		 public function pencarian($judulartikel)
		{
		$this->db->like('judul',$judulartikel);
		return $this->db->get('tabelartikel');
		}
		function tampilkan(){
		$this->db->order_by('id_info','DESC');//berdasarkan yang terbaru di input
		$this->db->limit(5);//menentukan jumlah yang ditampilkan pada menu utama wwebsite
		$query=$this->db->get('tabelinfo');
		if($query ->num_rows()>0) {
		return $query->result(); }
		else {
		return array();
		}
		}//batas menampilkan artikel readmore
		function baca_info($id){
		$this->db->where('id_info',$id);
		$query=$this->db->get('tabelinfo');
		return $query->result();
		}//untuk menampilkan artikel keseluruhan
		public function Konsultasi()
		{
			$data = array(
					
						'nama' => $this->input->post('nama'),
						'usia' => $this->input->post('usia'),
						'jk' => $this->input->post('jk'),
						'subjek' => $this->input->post('subjek'),
						'pertanyaan' => $this->input->post('pertanyaan')
						);
			$this->db->insert('tabelkonsul',$data);
		}
		}