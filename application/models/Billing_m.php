<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Billing_m extends CI_Model
{

  private $_tabel = 'pelanggan';

  public function GetAll()
  {
    $this->db->select('*');
    $this->db->from('Pelanggan');
    $this->db->where('Status',1);
    $this->db->join('Paket', 'Pelanggan.IdPaket = Paket.IdPaket', 'left');
		$this->db->join('Area', 'Pelanggan.IdArea = Area.IdArea', 'left');
    $query = $this->db->get();
    return $query->result();
  }

  public function JumlahAktif()
  {
    $this->db->select('*');
    $this->db->from('Pelanggan');
    $this->db->where('Status',1);
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function BiayaTambahan()
  {
    $this->db->select('*');
    $this->db->from('Pelanggan');
    $this->db->where('Status',1);
    $this->db->join('Paket', 'Pelanggan.IdPaket = Paket.IdPaket', 'left');
		$this->db->join('Area', 'Pelanggan.IdArea = Area.IdArea', 'left');
		$this->db->join('Biaya', 'Pelanggan.IdPelanggan = Biaya.IdPelanggan', 'left');
		$this->db->join('Tambahan', 'Biaya.IdTambahan = Tambahan.IdTambahan', 'left');
  }
}

/* End of file Billing_m.php */
