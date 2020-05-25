<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_m extends CI_Model {

	private $_table = "pelanggan";

	public $IdPelanggan;
	public $NoPelanggan;
	public $NamaPelanggan;
	public $AlamatPelanggan;
	public $TelponPelanggan;
	public $EmailPelanggan;
	public $IdPaket;
	public $TglPasang;
	public $Status;
	public $NoUrut;

	public function rules()
	{
		return[

			['field' => 'fnamapelanggan',
			'label' => 'Nama Pelanggan',
			'rules' => 'required'],

			['field' => 'femail',
			'label' => 'Email Pelanggan',
			'rules' => 'required|valid_email'],

			['field' => 'fnohp',
			'label' => 'No Handphone Pelanggan',
			'rules' => 'required|numeric|max_length[13]'],

			['field' => 'ftglpasang',
			'label' => 'Tanggal Pasang',
			'rules' => 'required'],

			['field' => 'falamat',
			'label' => 'Alamat Pelanggan',
			'rules' => 'required'],

			['field' => 'fpaket',
			'label' => 'Paket Internet',
			'rules' => 'required'],
		];
	}
	public function rulesEdit()
	{
		return[

			['field' => 'fnamapelangganedit',
			'label' => 'Nama Pelanggan',
			'rules' => 'required'],

			['field' => 'femailedit',
			'label' => 'Email Pelanggan',
			'rules' => 'required|valid_email'],

			['field' => 'fnohpedit',
			'label' => 'No Handphone Pelanggan',
			'rules' => 'required|numeric|max_length[12]'],

			['field' => 'falamatedit',
			'label' => 'Alamat Pelanggan',
			'rules' => 'required'],

			['field' => 'fpaketedit',
			'label' => 'Paket Internet',
			'rules' => 'required'],

			['field' => 'fstatusedit',
			'label' => 'Status Pelanggan',
			'rules' => 'required']
		];
	}

	public function GetAll()
	{
		return $this->db->get($this->_table)->result();
	}
	public function add()
	{
		$post = $this->security->xss_clean($this->input->post());
		$tglpasang=explode("-",$post['ftglpasang']);
		$nopel1=$tglpasang['0'];
		$nopel2=$tglpasang['1'];
		$this->IdPelanggan = uniqid('CS');
		$this->NoUrut = $post['fnourut'];
		$this->NoPelanggan = $nopel1.$nopel2.$post['fnourut'];
		$this->NamaPelanggan = $post['fnamapelanggan'];
		$this->AlamatPelanggan = $post['falamat'];
		$this->TelponPelanggan = $post['fnohp'];
		$this->EmailPelanggan = $post['femail'];
		$this->IdPaket = $post['fpaket'];
		$this->TglPasang = $post['ftglpasang'];
		$this->Status = $post['fstatus'];
		$this->db->insert($this->_table, $this);
	}

	public function CheckNoPel()
	{
		$query = $this->db->query("SELECT MAX(NoUrut) as NoPel from pelanggan");
		$hasil = $query->row();
		$nomor = $hasil->NoPel;
		// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
		$newnopel = $nomor + 1;
		return $newnopel;
	}

	public function update($post)
	{
		$post = $this->security->xss_clean($this->input->post());
		$this->IdPelanggan = decrypt_url($post['fidpel']);
		$this->NoPelanggan = $post['fnopel'];
		$this->NoUrut = $post['fnourutedit'];
		$this->NamaPelanggan = $post['fnamapelangganedit'];
		$this->AlamatPelanggan = $post['falamatedit'];
		$this->TelponPelanggan = $post['fnohpedit'];
		$this->EmailPelanggan = $post['femailedit'];
		$this->IdPaket = $post['fpaketedit'];
		$this->TglPasang = $post['ftglpasangedit'];
		$this->Status = $post['fstatusedit'];
		$this->db->update($this->_table, $this, array('IdPelanggan' => decrypt_url($post['fidpel'])));
	}

	public function GetById($id)
	{
		return $this->db->get_where($this->_table,["IdPelanggan" => decrypt_url($id)])->row();
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, array('IdPelanggan' => $id ));
	}


}

/* End of file customer_m.php */
/* Location: ./application/models/customer_m.php */
