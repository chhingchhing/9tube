<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$this->load->view('users/manage');
	}
}

/* End of file management.php */
/* Location: ./application/controllers/management.php */