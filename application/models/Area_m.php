<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Area_m extends CI_Model {

	private $_table = "area";

	public $Id;
	public $KodeArea;
	public $NamaArea;

	public function GetAll()
	{
		return $this->db->get($this->_table)->result();
	}
	

}

/* End of file paket_m.php */
/* Location: ./application/models/paket_m.php */