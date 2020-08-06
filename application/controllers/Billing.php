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
  public function index()
  {
		$data['aktif'] = $this->billing_m->GetAll();
		$data['jumlahAktif'] = $this->billing_m->JumlahAktif();
    $this->template->load('shared/_layout', 'Billing/pelanggan',$data);
  }
}

/* End of file Billing.php */
/* Location: ./application/controllers/Paket.php */