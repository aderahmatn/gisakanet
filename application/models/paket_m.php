<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_m extends CI_Model {

	private $_table = "paket";

	public $IdPaket;
	public $NamaPaket;
	public $TipeAkses;
	public $HargaPaket;

	public function GetAll()
	{
		return $this->db->get($this->_table)->result();
	}
	

}

/* End of file paket_m.php */
/* Location: ./application/models/paket_m.php */