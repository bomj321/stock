<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."login");
		}
		$this->load->model('Proveedores_model');
	}

	public function listado()
	{
		 $data = array(
     		 'proveedores' => $this->Proveedores_model->listado(),
    );

		$this->layout->view("listado",$data);

	}	

	public function registrar()
	{
		    $nombre_proveedor        = $this->input->post("nombre_proveedor");
			$direccion_proveedor_1   = $this->input->post("direccion_proveedor_1");
			$direccion_proveedor_2   = $this->input->post("direccion_proveedor_2");
			$ciudad_proveedor        = $this->input->post("ciudad_proveedor");
			$pais_proveedor          = $this->input->post("pais_proveedor");
			$codigo_postal           = $this->input->post("codigo_postal");
			$contacto_proveedor      = $this->input->post("contacto_proveedor");
			$numero_proveedor        = $this->input->post("numero_proveedor");
			$numero_fax              = $this->input->post("numero_fax");
			$numero_ruc              = $this->input->post("numero_ruc");
		    $web_proveedor           = $this->input->post("web_proveedor");



			$data = array
					(
						'nombre_proveedor'      => trim($nombre_proveedor),
						'direccion_proveedor_1' => trim($direccion_proveedor_1),
						'direccion_proveedor_2' => trim($direccion_proveedor_2),
						'ciudad_proveedor '     => trim($ciudad_proveedor),	
						'pais_proveedor '       => trim($pais_proveedor),	
						'codigo_postal'         => trim($codigo_postal),
						'contacto_proveedor'    => trim($contacto_proveedor),
						'numero_proveedor'      => trim($numero_proveedor),
						'numero_fax '           => trim($numero_fax),	
						'numero_ruc '           => trim($numero_ruc),	
						'web_proveedor '        => trim($web_proveedor),
						'estado '               => '1'				
				
					);	
			$this->Proveedores_model->agregar_proveedor($data);	
			
	}

	public function vista_edicion($id_proveedor)
	{
		$data  = array(
				'proveedor'   => $this->Proveedores_model->seleccionar_proveedor($id_proveedor), 
			);

		$this->load->view("proveedores/respuesta_modal_editar",$data);

	}	

	public function editar()
	{
			$id_proveedor            = $this->input->post("id_proveedor");
			$nombre_proveedor        = $this->input->post("nombre_proveedor");
			$direccion_proveedor_1   = $this->input->post("direccion_proveedor_1");
			$direccion_proveedor_2   = $this->input->post("direccion_proveedor_2");
			$ciudad_proveedor        = $this->input->post("ciudad_proveedor");
			$pais_proveedor          = $this->input->post("pais_proveedor");
			$codigo_postal           = $this->input->post("codigo_postal");
			$contacto_proveedor      = $this->input->post("contacto_proveedor");
			$numero_proveedor        = $this->input->post("numero_proveedor");
			$numero_fax              = $this->input->post("numero_fax");
			$numero_ruc              = $this->input->post("numero_ruc");
		    $web_proveedor           = $this->input->post("web_proveedor");

			$data = array
					(
						'nombre_proveedor'      => trim($nombre_proveedor),
						'direccion_proveedor_1' => trim($direccion_proveedor_1),
						'direccion_proveedor_2' => trim($direccion_proveedor_2),
						'ciudad_proveedor '     => trim($ciudad_proveedor),	
						'pais_proveedor '       => trim($pais_proveedor),	
						'codigo_postal'         => trim($codigo_postal),
						'contacto_proveedor'    => trim($contacto_proveedor),
						'numero_proveedor'      => trim($numero_proveedor),
						'numero_fax '           => trim($numero_fax),	
						'numero_ruc '           => trim($numero_ruc),	
						'web_proveedor '        => trim($web_proveedor)						
					);	
			$this->Proveedores_model->actualizar_proveedor($id_proveedor,$data);	
			
	}

		public function vista_eliminar($id_proveedor)
	{
		$data  = array(
				'proveedor'   => $this->Proveedores_model->seleccionar_proveedor($id_proveedor), 
			);

		$this->load->view("proveedores/respuesta_modal_eliminar",$data);
		
	}

	public function eliminar()
	{
			$id_proveedor            = $this->input->post("id_proveedor");

			$data = array
					(
						'estado'                 => '0',									
					);	
			$this->Proveedores_model->actualizar_proveedor($id_proveedor,$data);	
			
	}	

}
