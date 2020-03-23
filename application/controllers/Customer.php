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

	public function update($id)
	{
		if (!isset($id)) redirect('customer');

		$this->form_validation->set_message('required','%s tidak boleh kosong!');
		$this->form_validation->set_message('numeric','%s harus berupa angka!');
		$this->form_validation->set_message('valid_email','%s format email tidak valid!');
		$customer = $this->customer_m;
		$validation = $this->form_validation;
		$validation->set_rules($customer->rules());

		if ($validation->run()) {
			$post = $this->input->post(null, TRUE);
			$customer->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Update data customer berhasil!');
				redirect('customer','refresh');
			}else{
				$this->session->set_flashdata('warning', 'Data customer tidak ada yang diupdate!');
				redirect('customer','refresh');
			}
		}

		$data['cust'] = $this->customer_m->GetById($id);
		if (!$data['cust']) {
			$this->session->set_flashdata('error', 'Data customer tidak ditemukan!');
			redirect('customer','refresh');
		}
		$this->template->load('shared/_layout', 'customer/edit', $data);
	}

	public function delete($id)
	{
		$this->customer_m->delete(decrypt_url($id));
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data customer berhasil dihapus!');
			redirect('customer','refresh');
		}
	}
}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */
