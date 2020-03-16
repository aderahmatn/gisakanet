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
			'rules' => 'required|numeric'],

			['field' => 'ftglpasang',
			'label' => 'Tanggal Pasang',
			'rules' => 'required'],

			['field' => 'falamat',
			'label' => 'Alamat Pelanggan',
			'rules' => 'required'],

			['field' => 'fpaket',
			'label' => 'Paket Internet',
			'rules' => 'required'],

			['field' => 'fstatus',
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
		$nopel=implode("", $tglpasang);
		$this->IdPelanggan = uniqid('CS');
		$this->NoUrut = $post['fnourut'];
		$this->NoPelanggan = $nopel.$post['fnourut'];
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

}

/* End of file customer_m.php */
/* Location: ./application/models/customer_m.php */