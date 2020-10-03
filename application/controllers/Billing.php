<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Billing extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('billing_m');
  }

  public function index($bln = null, $thn = null)
  {
    $billing = $this->billing_m;
    $validation = $this->form_validation;
    $validation->set_rules($billing->rules_cari());
    if ($validation->run() == FALSE) {
      if ($bln != null && $thn != null) {
        $data['bulan'] = $bln;
        $data['tagihan'] = $this->billing_m->GetTagihan($bln, $thn);
        $data['jumlahAktif'] = $this->billing_m->JumlahAktif();
        $this->template->load('shared/_layout', 'Billing/index', $data);
      } else {
        $bln = date('m');
        $thn = date('Y');
        $data['bulan'] = $bln;
        $data['tagihan'] = $this->billing_m->GetTagihan($bln, $thn);
        $data['jumlahAktif'] = $this->billing_m->JumlahAktif();
        $this->template->load('shared/_layout', 'Billing/index', $data);
      }
    } else {
      $bln = $this->input->post('fbulan');
      $thn = $this->input->post('ftahun');
      $data['bulan'] = $bln;
      $data['tagihan'] = $this->billing_m->GetTagihan($bln, $thn);
      $data['jumlahAktif'] = $this->billing_m->JumlahAktif();
      $this->template->load('shared/_layout', 'Billing/index', $data);
    }
  }

  public function create()
  {
    $this->form_validation->set_message('required', '%s tidak boleh kosong!');
    $this->form_validation->set_message('numeric', '%s harus berupa angka!');
    $this->form_validation->set_message('max_length', '%s tidak boleh lebih dari 12 digit!');
    $this->form_validation->set_message('valid_email', '%s format email tidak valid!');
    $tagihan = $this->billing_m;
    $validation = $this->form_validation;
    $validation->set_rules($tagihan->rules_tagihan());

    if ($validation->run() == FALSE) {
      $data['bulan'] = date('m');
      $data['aktif'] = $this->billing_m->GetAll();
      $this->template->load('shared/_layout', 'Billing/create', $data);
    } else {
      $post = $this->input->post(null, TRUE);
      $cust = $this->input->post('aktif');
      $tagihan->add($post, $cust);
      if ($this->db->affected_rows() > 0) {
        $this->session->set_flashdata('success', 'Data customer berhasil disimpan!');
        redirect('billing', 'refresh');
      }
    }
  }
  public function submit()
  {
    $data_cust = $this->input->post('aktif');
    $data['json'] = array($data_cust);

    $this->template->load('shared/_layout', 'Billing/test', $data);
  }
  public function tagihan($bln = null)
  {
    $data['bulan'] = $bln;
    $data['aktif'] = $this->billing_m->GetAll();
    $data['jumlahAktif'] = $this->billing_m->JumlahAktif();
    $this->template->load('shared/_layout', 'Billing/tagihan', $data);
  }
  public function delete($id)
  {
    $this->billing_m->delete($id);
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data tagihan berhasil dibatalkan!');
      redirect('billing', 'refresh');
    }
  }
}

/* End of file Billing.php */
/* Location: ./application/controllers/Paket.php */