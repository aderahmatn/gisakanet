<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('customer_m');
		$this->load->model('paket_m');
	}

	public function index()
	{
		
		$data['nopel']=$this->customer_m->CheckNoPel();
		$data['paket']=$this->paket_m->GetAll();
		$data['customer']=$this->customer_m->GetAll();
		$this->template->load('shared/_layout','customer/view', $data);
	}

	public function create()
	{
		$this->form_validation->set_message('required','%s tidak boleh kosong!');
		$this->form_validation->set_message('numeric','%s harus berupa angka!');
		$this->form_validation->set_message('valid_email','%s format email tidak valid!');
		$customer = $this->customer_m;
		$validation = $this->form_validation;
		$validation->set_rules($customer->rules());

		if ($validation->run() == FALSE)
		{
			$data['nopel']=$this->customer_m->CheckNoPel();
			$data['customer']=$this->customer_m->GetAll();
			$data['paket']=$this->paket_m->GetAll();
			$this->template->load('shared/_layout', 'customer/view', $data);
		}
		else
		{
			$post = $this->input->post(null, TRUE);
			$customer->add($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data customer berhasil disimpan!');
				redirect('customer','refresh');
			}
		}
	}
}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */