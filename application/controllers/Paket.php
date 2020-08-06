<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('paket_m');
	}

	public function index()
	{
		$data['paket'] = $this->paket_m->GetAll();
		$this->template->load('shared/_layout', 'paket/view', $data);
	}

	public function create()
	{
		$this->form_validation->set_message('required', '%s tidak boleh kosong!');
		$this->form_validation->set_message('numeric', '%s harus berupa angka!');
		$this->form_validation->set_message('min_length', '%s minimal 3 karakter!');
		$paket = $this->paket_m;
		$validation = $this->form_validation;
		$validation->set_rules($paket->rules());

		if ($validation->run() == FALSE) {
			$data['paket'] = $this->paket_m->GetAll();
			$this->template->load('shared/_layout', 'paket/view', $data);;
		} else {
			$post = $this->input->post(null, TRUE);
			$paket->add($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data paket berhasil disimpan!');
				redirect('paket', 'refresh');
			}
		}
	}

	public function update($id = NULL)
	{
		if (!isset($id)) redirect('paket');
		$this->form_validation->set_message('required', '%s tidak boleh kosong!');
		$this->form_validation->set_message('numeric', '%s harus berupa angka!');
		$this->form_validation->set_message('numeric', '%s harus berupa angka!');
		$paket = $this->paket_m;
		$validation = $this->form_validation;
		$validation->set_rules($paket->rulesEdit());

		if ($validation->run()) {
			$post = $this->input->post(null, TRUE);
			$paket->update($post);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Update data paket berhasil!');
				redirect('paket', 'refresh');
			} else {
				$this->session->set_flashdata('warning', 'Data paket tidak ada yang diupdate!');
				redirect('paket', 'refresh');
			}
		} else {
			$data['id'] = $id;
			$data['paket'] = $this->paket_m->GetAll();
			$this->template->load('shared/_layout', 'paket/view', $data);
		}

		$data['pkt'] = $this->paket_m->GetById($id);
		if (!$data['pkt']) {
			$this->session->set_flashdata('error', 'Data paket tidak ditemukan!');
			redirect('paket', 'refresh');
		}
	}

	public function delete($id)
	{
		$this->paket_m->delete(decrypt_url($id));
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data paket berhasil dihapus!');
			redirect('paket', 'refresh');
		}
	}


}

/* End of file Paket.php */
/* Location: ./application/controllers/Paket.php */