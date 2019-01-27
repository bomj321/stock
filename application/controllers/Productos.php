<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."login");
		}
		$this->load->model('Productos_model');
		$this->load->model('Proveedores_model');
	}

	public function listado()
	{
		 $data = array(
     		 'productos'   => $this->Productos_model->listado(),
     		 'proveedores' => $this->Proveedores_model->listado()
    );

		$this->layout->view("listado",$data);

	}

	public function registrar()
	{
            $codigo_producto            = $this->input->post("codigo_producto");
			$descripcion_producto       = $this->input->post("descripcion_producto");
			$precio_producto            = $this->input->post("precio_producto");
			$stock_producto             = $this->input->post("stock_producto");
			$impuesto_producto          = $this->input->post("impuesto_producto");
			$codigo_categoria           = $this->input->post("codigo_categoria");
			$descripcion_categoria      = $this->input->post("descripcion_categoria");
			$subcodigo_categoria        = $this->input->post("subcodigo_categoria");
			$subdescripcion_categoria   = $this->input->post("subdescripcion_categoria");
			$codigo_bodega              = $this->input->post("codigo_bodega");
		    $descripcion_bodega         = $this->input->post("descripcion_bodega");
		    $codigo_fabricante          = $this->input->post("codigo_fabricante");
		    $provedores                 = $this->input->post("provedores");

			$data = array
					(
						'codigo_producto'           => trim($codigo_producto),
						'descripcion_producto'      => trim($descripcion_producto),
						'precio_producto'           => trim($precio_producto),
						'stock_producto '           => trim($stock_producto),	
						'impuesto_producto '        => trim($impuesto_producto),	
						'codigo_categoria'          => trim($codigo_categoria),
						'descripcion_categoria'     => trim($descripcion_categoria),
						'subcodigo_categoria'       => trim($subcodigo_categoria),
						'subdescripcion_categoria ' => trim($subdescripcion_categoria),	
						'codigo_bodega '            => trim($codigo_bodega),	
						'descripcion_bodega '       => trim($descripcion_bodega),	
						'codigo_fabricante '        => trim($codigo_fabricante)			
				
					);

			$ultimo_id= $this->Productos_model->agregar_producto($data);

			for ($i=0; $i < count($provedores); $i++) { 

						$proveedor_producto = array(
							'id_proveedor' => $provedores[$i],
							'id_producto'  => $ultimo_id
						);

					    $this->Productos_model->agregar_producto_proveedor($proveedor_producto);					
				}	
			
	}	
}
