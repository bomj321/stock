<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedores extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."login");
		}
		$this->load->model('Vendedores_model');
	}

	public function listado()
	{
		 $data = array(
     		 'vendedores' => $this->Vendedores_model->listado(),
    );

		$this->layout->view("listado",$data);

	}	

	public function registrar()
	{
		    $nombre_vendedor        = $this->input->post("nombre_vendedor");
			$dni_vendedor           = $this->input->post("dni_vendedor");
			$correo_vendedor        = $this->input->post("correo_vendedor");
			



			$data = array
					(
						'nombre_vendedor'      => trim($nombre_vendedor),
						'dni_vendedor'         => trim($dni_vendedor),
						'correo_vendedor'      => trim($correo_vendedor),
								
				
					);	
			$this->Vendedores_model->agregar_vendedor($data);	
			
	}

	public function vista_edicion($id_vendedor)
	{
		$data  = array(
				'vendedor'   => $this->Vendedores_model->seleccionar_vendedor($id_vendedor), 
			);

		$this->load->view("vendedores/respuesta_modal_editar.php",$data);
		
	}	

	public function editar()
	{
			$id_vendedor            = $this->input->post("id_vendedor");
			$nombre_vendedor        = $this->input->post("nombre_vendedor");
			$dni_vendedor           = $this->input->post("dni_vendedor");
			$correo_vendedor        = $this->input->post("correo_vendedor");

			$data = array
					(
						'nombre_vendedor'      => trim($nombre_vendedor),
						'dni_vendedor'         => trim($dni_vendedor),
						'correo_vendedor'      => trim($correo_vendedor),					
					);	
			$this->Vendedores_model->actualizar_vendedor($id_vendedor,$data);	
			
	}

	public function vista_eliminar($id_vendedor)
	{
		$data  = array(
				'vendedor'   => $this->Vendedores_model->seleccionar_vendedor($id_vendedor), 
			);
		$this->load->view("vendedores/respuesta_modal_eliminar.php",$data);
		
	}

	public function eliminar()
	{
			$id_vendedor            = $this->input->post("id_vendedor");

			$data = array
					(
						'estado'                 => '0',									
					);	
			$this->Vendedores_model->actualizar_vendedor($id_vendedor,$data);	
			
	}	
}
