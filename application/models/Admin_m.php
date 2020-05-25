<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

  private $_tabel = 'admin';

  public function login($post)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('Username', $post['username']);
		$this->db->where('Password', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}	

}

/* End of file Admin_m.php */
