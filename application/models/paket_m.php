<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket_m extends CI_Model {

	private $_table = "paket";

	public $IdPaket;
	public $NamaPaket;
	public $TipeAkses;
	public $HargaPaket;

	public function rules()
	{
		return [
			['field' => 'fkodepaket',
			'label' => 'Kode Paket',
			'rules' => 'required',],

			['field' => 'fnamapaket',
			'label' => 'Nama Paket',
			'rules' => 'required|min_length[3]',],

			['field' => 'ftipeakses',
			'label' => 'Tipe Akses Paket',
			'rules' => 'required',],

			['field' => 'fhargapaket',
			'label' => 'Harga Paket',
			'rules' => 'required|numeric',]
		];
	}
	public function rulesEdit()
	{
		return [
			['field' => 'fkodepaketedit',
			'label' => 'Kode Paket',
			'rules' => 'required',],

			['field' => 'fnamapaketedit',
			'label' => 'Nama Paket',
			'rules' => 'required|min_length[3]',],

			['field' => 'ftipeaksesedit',
			'label' => 'Tipe Akses Paket',
			'rules' => 'required',],

			['field' => 'fhargapaketedit',
			'label' => 'Harga Paket',
			'rules' => 'required|numeric',]
		];
	}

	public function GetAll()
	{
		return $this->db->get($this->_table)->result();
	}
	
	public function add()
	{
		$post = $this->security->xss_clean($this->input->post());
		$this->IdPaket = $post['fkodepaket'];
		$this->NamaPaket = $post['fnamapaket'];
		$this->TipeAkses = $post['ftipeakses'];
		$this->HargaPaket = $post['fhargapaket'];
		$this->db->insert($this->_table, $this);
	}

	public function update($post)
	{
		$post = $this->security->xss_clean($this->input->post());
		$this->IdPaket = $post['fkodepaketedit'];
		$this->NamaPaket = $post['fnamapaketedit'];
		$this->TipeAkses = $post['ftipeaksesedit'];
		$this->HargaPaket = $post['fhargapaketedit'];
		$this->db->update($this->_table, $this, array('IdPaket' => $post['fkodepaketedit']));
	}

	public function GetById($id)
	{
		return $this->db->get_where($this->_table,["IdPaket" => decrypt_url($id)])->row();
	}
	public function delete($id)
	{
		return $this->db->delete($this->_table, array('IdPaket' => $id ));
	}

}

/* End of file paket_m.php */
/* Location: ./application/models/paket_m.php */