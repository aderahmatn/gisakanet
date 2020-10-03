<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Billing_m extends CI_Model
{
  private $_table = "tagihan";

  public function rules_cari()
  {
    return [

      [
        'field' => 'fbulan',
        'label' => 'Bulan',
        'rules' => 'required'
      ],

      [
        'field' => 'ftahun',
        'label' => 'Tahun',
        'rules' => 'required'
      ],
    ];
  }
  public function rules_tagihan()
  {
    return [

      [
        'field' => 'fbulan',
        'label' => 'Bulan',
        'rules' => 'required'
      ],

      [
        'field' => 'ftahun',
        'label' => 'Tahun',
        'rules' => 'required'
      ],
      [
        'field' => 'aktif[]',
        'label' => 'Pelanggan',
        'rules' => 'required'
      ],

    ];
  }

  public function GetAll()
  {
    $this->db->select('*');
    $this->db->from('Pelanggan');
    $this->db->where('Status', 1);
    $this->db->join('Paket', 'Pelanggan.IdPaket = Paket.IdPaket', 'left');
    $this->db->join('Area', 'Pelanggan.IdArea = Area.IdArea', 'left');
    $query = $this->db->get();
    return $query->result();
  }

  public function JumlahAktif()
  {
    $this->db->select('*');
    $this->db->from('Pelanggan');
    $this->db->where('Status', 1);
    $query = $this->db->get();
    return $query->num_rows();
  }

  public function BiayaTambahan()
  {
    $this->db->select('*');
    $this->db->from('Pelanggan');
    $this->db->where('Status', 1);
    $this->db->join('Paket', 'Pelanggan.IdPaket = Paket.IdPaket', 'left');
    $this->db->join('Area', 'Pelanggan.IdArea = Area.IdArea', 'left');
    $this->db->join('Biaya', 'Pelanggan.IdPelanggan = Biaya.IdPelanggan', 'left');
    $this->db->join('Tambahan', 'Biaya.IdTambahan = Tambahan.IdTambahan', 'left');
  }

  public function GetTagihan($bln, $thn)
  {
    $this->db->select('*');
    $this->db->from('tagihan');
    $this->db->where('bulan', $bln);
    $this->db->where('tahun', $thn);
    $this->db->join('Pelanggan', 'Pelanggan.IdPelanggan = tagihan.IdPelanggan', 'left');
    $query = $this->db->get();
    return $query->result();
  }
  public function GetPaket($id)
  {
    $this->db->select('IdPaket');
    $this->db->from('pelanggan');
    $this->db->where('IdPelanggan', $id);
    $hasil = $this->db->get()->row();
    return $hasil->IdPaket;
  }
  public function GetTotalTagihan($id)
  {
    $pkt = $this->GetPaket($id);
    $this->db->select('HargaPaket');
    $this->db->from('paket');
    $this->db->where('IdPaket', $pkt);
    $query = $this->db->get()->row();
    return $query->HargaPaket;
  }
  public function GetPeriodeTagihan($id)
  {
    $this->db->select('TglPasang');
    $this->db->from('pelanggan');
    $this->db->where('IdPelanggan', $id);
    $hasil = $this->db->get()->row();
    $tglPasang = $hasil->TglPasang;
    $tgl = substr($tglPasang, 8);
    if ($tgl >= 16) {
      return 2;
    } else {
      return 1;
    }
  }

  public function Add($post, $cust)
  {
    $result = array();
    foreach ($cust as $key => $val) {
      $result[] = array(
        'IdTagihan'   => uniqid('BIL'),
        'IdPelanggan'   => $_POST['aktif'][$key],
        'bulan'   => $_POST['fbulan'],
        'tahun'   => $_POST['ftahun'],
        'TotalTagihan'   => $this->GetTotalTagihan($_POST['aktif'][$key]),
        'PeriodeTagihan'   => $this->GetPeriodeTagihan($_POST['aktif'][$key]),
      );
    }
    $this->db->insert_batch($this->_table, $result);
  }

  public function delete($id)
  {
    return $this->db->delete($this->_table, array('IdTagihan' => $id));
  }
}


/* End of file Billing_m.php */
