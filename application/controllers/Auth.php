<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin_m');
  }


  public function login()
  {
    check_already_login();
    $this->load->view('auth/login', FALSE);
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($post['login'])) {
      $query = $this->admin_m->login($post);
      if ($query->num_rows() > 0) {
        $row = $query->row();
        $params = array(
          'username' => $row->Username,
          'name' => $row->Name,
          'status' => 'login',
          'url' => $row->url,
        );
        $this->session->set_userdata($params);
        redirect('dashboard', 'refresh');
      } else {
        $this->session->set_flashdata('error', '&nbsp; Username / Password   salah!');
        redirect('auth/login', 'refresh');
      }
    }
  }
  public function logout()
	{
		$params = array('username','name', 'status');
		$this->session->unset_userdata($params);
		redirect('auth/login','refresh');
	}
}

/* End of file Auth.php */
