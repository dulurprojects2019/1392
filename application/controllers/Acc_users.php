<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acc_users extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		// check_not_login();
	}

	public function index()
	{
		$data['title_header'] = "Users List";
		$data['title_menu'] = "Add User";
		
		$this->temp_backend->load('backend/theme/template', 'backend/accounts/users/users_list', $data);
	}

	public function add(){
		$data['levels'] = $this->users_m->get_levels();
		$data['title_header'] = 'Add User';
		$data['title_menu'] = "Users List";

		$this->form_validation->set_rules('usr_fullname', 'Fullname', 'required');
		$this->form_validation->set_rules('usr_email', 'Email / Username', 'required|is_unique[users.usr_email]');
		$this->form_validation->set_rules('usr_password', 'Password', 'required');
		$this->form_validation->set_rules('usr_passconf', 'Password Confirmation', 'required|matches[usr_password]',
			array('matches' => '%s Wrong')
		);
		$this->form_validation->set_rules('usr_images', 'Photo', 'callback_validate_image');

		$this->form_validation->set_message('required', '%s Empty, Please Input..');
		$this->form_validation->set_message('is_unique', '%s Already Exist, Please Input Another Email / Username..');

		if($this->form_validation->run() === FALSE){
			$this->temp_backend->load('backend/theme/template', 'backend/accounts/users/users_form_add', $data);
		} else {
			$config['upload_path'] = './assets/backend/1508photos';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';

			date_default_timezone_set('Asia/Jakarta');
			$rename = date('d-m-Y His ').strtolower($this->input->post('usr_fullname'));
			$config['file_name'] = $rename;

			$this->load->helper('file');
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('usr_images')){
				$errors = array('error' => $this->upload->display_errors());
				$photo = '1510nophoto.png';
			} else {
				$dataphotos = $this->upload->data();
				$photo = $dataphotos['file_name'];
			}

			$this->users_m->add_users($photo);
			redirect('accounts/users/list-users');
		}
	}
}
