<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."login");
		}
		$this->load->model('Usuarios_model');
	}

	public function listado()
	{
		 $data = array(
     		 'clientes' => $this->Usuarios_model->listado() ,
    );

		$this->layout->view("listado",$data);

	}	

	public function registrar()
	{
		    $nombre_cliente       = $this->input->post("nombre_cliente");
			$dni_cliente          = $this->input->post("dni_cliente");
			$direccion_cliente    = $this->input->post("direccion_cliente");
			$correo_cliente       = $this->input->post("correo_cliente");
			$codigo_cliente       = $this->input->post("codigo_cliente");


			$data = array
					(
						'nombre_cliente'         => trim($nombre_cliente),
						'dni_cliente'            => trim($dni_cliente),
						'direccion_cliente'      => trim($direccion_cliente),
						'correo_cliente '        => trim($correo_cliente),	
						'codigo_cliente '        => trim($codigo_cliente),					
					);	
			$this->Usuarios_model->agregar_cliente($data);	
			
	}

	public function vista_edicion($id_cliente)
	{
		$data  = array(
				'cliente'   => $this->Usuarios_model->seleccionar_cliente($id_cliente), 
			);

		$this->load->view("clientes/respuesta_modal_editar.php",$data);
	}	

	public function editar()
	{
			$id_cliente           = $this->input->post("id_cliente");
		    $nombre_cliente       = $this->input->post("nombre_cliente");
			$dni_cliente          = $this->input->post("dni_cliente");
			$direccion_cliente    = $this->input->post("direccion_cliente");
			$correo_cliente       = $this->input->post("correo_cliente");
			$codigo_cliente       = $this->input->post("codigo_cliente");


			$data = array
					(
						'nombre_cliente'         => trim($nombre_cliente),
						'dni_cliente'            => trim($dni_cliente),
						'direccion_cliente'      => trim($direccion_cliente),
						'correo_cliente '        => trim($correo_cliente),	
						'codigo_cliente '        => trim($codigo_cliente),					
					);	
			$this->Usuarios_model->actualizar_cliente($id_cliente,$data);	
			
	}

	public function vista_eliminar($id_cliente)
	{
		$data  = array(
				'cliente'   => $this->Usuarios_model->seleccionar_cliente($id_cliente), 
			);

		$this->load->view("clientes/respuesta_modal_eliminar.php",$data);
		
	}


	public function eliminar()
	{
			$id_cliente           = $this->input->post("id_cliente"); 

			$data = array
					(
						'estado'                 => '0',									
					);	
			$this->Usuarios_model->actualizar_cliente($id_cliente,$data);	
			
	}	



}
