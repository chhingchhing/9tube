<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menus extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$datas['title'] = "Menus Management";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view('menus/manage', $datas);
	}

	public function edit() {
		$datas['title'] = "Edit Menu";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view("menus/form", $datas);
	}

	public function create() {
		$datas['title'] = "New Menu";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view("menus/form", $datas);
	}

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */