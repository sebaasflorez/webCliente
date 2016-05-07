<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('encabezado');
		$this->load->view('login');
		$this->load->view('footer');

	}

	public function validar_ingreso(){

		if (count($this->input->post()) <= 0) {
			redirect(strtolower(__CLASS__));
		}
		
		$usuario = $this->input->post()['usuario'];
		$clave = $this->input->post()['clave'];
		$this->load->library('servicio',array('parametros'=>'funcion=login&nickname='.$usuario.'&clave='.$clave));
		$ingreso = $this->servicio->peticion();

		if ($ingreso['estado']=='1') {
			$this->session->set_userdata('usuario', $ingreso['salida']);
			redirect('cliente');
		}else{
			$data['fail'] = $ingreso;
			$this->load->view('encabezado');
			$this->load->view(strtolower(__CLASS__),$data);
			$this->load->view('footer');	
		}
	}

	public function salir(){
		$this->session->unset_userdata('usuario');
		redirect(strtolower(__CLASS__));
	}
}

?>
