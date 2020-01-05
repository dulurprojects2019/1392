<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['content_header'] = "Dashboard";
		$this->temp_backend->load('backend/theme/template', 'backend/dashboard/home', $data);
	}
}
