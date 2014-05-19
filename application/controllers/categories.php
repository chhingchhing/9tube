<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$datas['title'] = "Categories Management";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view('categories/manage', $datas);
	}

	public function edit() {
		$datas['title'] = "Edit Category";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view("categories/form", $datas);
	}

	public function create() {
		$datas['title'] = "New Category";
		$datas['controller_name'] = strtolower(get_class());
		$this->load->view("categories/form", $datas);
	}

}

/* End of file users.php */
/* Location: ./application/controllers/users.php */