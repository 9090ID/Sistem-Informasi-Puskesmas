<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clogin extends CI_Controller {

	function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('url','form'));
		$this->load->model('m_login');
	}
	public function index()
	{
		$this->load->view('admin/login_Admin'); 
		$this->load->view('admin/footer'); 
	}
	public function login()
	{
		if($this->input->post('login')) {
			$nip = $this->input->post('nip');
			$password = md5($this->input->post('password'));
			$q = $this->m_login->getuser($nip,$password);
			if(count($q) > 0) {
				$data = array(
								'ID_ADMIN' => $q->id,
								'NIP-ADMIN' => $q->nip,
								'PASS-ADMIN' => $q->password,
								'isLOGIN' => TRUE
							); 
				$this->session->set_userdata($data);
				$this->session->set_flashdata('result','Anda Berhasil Login');
				redirect('admin');
			} else {
				$this->session->set_flashdata('result','Maaf nip dan password tidak cocok');
				redirect('clogin');
			}
		} else {
			redirect('clogin');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('ID_ADMIN');
		$this->session->unset_userdata('NIP-ADMIN');
		$this->session->unset_userdata('PASS-ADMIN');
		$this->session->unset_userdata('isLOGIN');
		redirect('clogin/index');
	}

}
