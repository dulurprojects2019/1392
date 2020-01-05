<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acc_levels extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		// check_not_login();
	}

	public function index()
	{
		$data['title_header'] = "Levels List";
		$this->temp_backend->load('backend/theme/template', 'backend/accounts/levels/levels_list', $data);
	}
}
