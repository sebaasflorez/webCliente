<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		
	}

	public function index()
	{
		if (isset($this->session->usuario)) {
			redirect('cliente');
		}else{
			redirect('login');
		}
	}
}
?>
