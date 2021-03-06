<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$datas['title'] = "Users Management";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view('users/manage', $datas);
	}

	public function edit() {
		$datas['title'] = "Edit User";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view("users/form", $datas);
	}

	public function create() {
		$datas['title'] = "New User";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view("users/form", $datas);
	}

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */