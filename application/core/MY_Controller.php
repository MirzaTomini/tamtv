<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		

	}
}


/**
* Extends Class Web
*
* @author Vicky Nitinegoro <pkpvicky@gmail.com>
*/
class Web extends MY_Controller
{
	public $user_login;

	public function __construct()
	{
		parent::__construct();

		$this->load->library(
			array('slug','session','template','page_title','breadcrumbs','meta_tags')
		);
		
		if($this->session->userdata('user_login') != FALSE) 
			$this->user_login = $this->session->userdata('user_login');

		$this->load->model(
			array('menus', 'options','themes')
		);

		//$this->load->js(base_url("public/dist/js/push.min.js?v1.0.1"));
		//$this->load->js(base_url("public/android/js/notifications.js?v1.0.1"));
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */