<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		check_not_login();
	}
	

	public function index()
	{
		$this->template->load('shared/_layout','dashboard/dashboard');
		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */