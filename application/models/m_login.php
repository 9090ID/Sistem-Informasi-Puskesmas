<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {
	public function getuser($nip,$password)
	{
		$this->db->where('nip',$nip);
		$this->db->where('password',$password);
		$this->db->where('level','admin');
		return $this->db->get('tabeladmin')->row();
	}

}


