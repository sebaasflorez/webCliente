<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{

		$this->load->library('servicio',array('parametros'=>'funcion=reporte_clientes'));
		$data['registros'] = $this->servicio->peticion();
		
		$this->load->view('encabezado');
		$this->load->view('nav');
		$this->load->view(strtolower(__CLASS__),$data);
		$this->load->view('footer');
	}

	public function editar(){
		$id = $this->uri->segment(3);
		$this->load->library('servicio',array('parametros'=>'funcion=buscar_cliente&cliente='.$id));
		$data['registros'] = $this->servicio->peticion();
		$data['accion'] = 'cliente/actualizar' ;
		$data['titulo'] = 'Editar Cliente' ;
		
		$this->load->view('encabezado');
		$this->load->view('nav');
		$this->load->view('formulario_cliente',$data);
		$this->load->view('footer');
	}

	public function actualizar(){

		$parametros= 'funcion=editar_cliente';
		$parametros.= '&cliente='.$this->input->post('id_cliente');
		$parametros.= '&tipo_documento='.$this->input->post('tipo_documento');
		$parametros.= '&numero_documento='.$this->input->post('numero_documento');
		$parametros.= '&nombres='.$this->input->post('nombres');
		$parametros.= '&apellidos='.$this->input->post('apellidos');
		$parametros.= '&telefono='.$this->input->post('telefono');
		$parametros.= '&direccion='.$this->input->post('direccion');

		$this->load->library('servicio',array('parametros'=>$parametros));
		$data['registros'] = $this->servicio->peticion();

		redirect(strtolower(__CLASS__));
	}

	public function crear(){
		
		$data['registros'] = array( 'id_cliente' =>'',
									'tipo_documento' =>'', 
									'numero_documento' =>'', 
									'nombres' =>'', 
									'apellidos' =>'', 
									'telefono' =>'', 
									'direccion' =>'');

		$data['accion'] = 'cliente/adicionar' ;
		$data['titulo'] = 'Crear Cliente' ;
		
		$this->load->view('encabezado');
		$this->load->view('nav');
		$this->load->view('formulario_cliente',$data);
		$this->load->view('footer');
	}		

	public function adicionar(){

		$parametros= 'funcion=crear_cliente';
		$parametros.= '&cliente='.$this->input->post('id_cliente');
		$parametros.= '&tipo_documento='.$this->input->post('tipo_documento');
		$parametros.= '&numero_documento='.$this->input->post('numero_documento');
		$parametros.= '&nombres='.$this->input->post('nombres');
		$parametros.= '&apellidos='.$this->input->post('apellidos');
		$parametros.= '&telefono='.$this->input->post('telefono');
		$parametros.= '&direccion='.$this->input->post('direccion');

		$this->load->library('servicio',array('parametros'=>$parametros));
		$data['registros'] = $this->servicio->peticion();

		redirect(strtolower(__CLASS__));


	}
}
?>
