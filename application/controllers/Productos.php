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


	public function vista_informacion($id_producto){

			$proveedores_objetos = $this->Productos_model->producto_proveedores($id_producto);

			$array_proveedores = array();
                    foreach ( $proveedores_objetos as  $proveedores_objeto) {
                        array_push($array_proveedores,$proveedores_objeto->id_proveedor);
                    }    

		    $data  = array(
				'producto'                => $this->Productos_model->informacion_producto($id_producto),
				'producto_proveedores'    => $array_proveedores, 
				'proveedores'             => $this->Proveedores_model->listado()
			);

		$this->load->view("productos/respuesta_modal_informacion",$data);
	}	

	public function vista_edicion($id_producto){

			$proveedores_objetos = $this->Productos_model->producto_proveedores($id_producto);

			$array_proveedores = array();
                    foreach ( $proveedores_objetos as  $proveedores_objeto) {
                        array_push($array_proveedores,$proveedores_objeto->id_proveedor);
                    }    

		    $data  = array(
				'producto'                => $this->Productos_model->informacion_producto($id_producto),
				'producto_proveedores'    => $array_proveedores, 
				'proveedores'             => $this->Proveedores_model->listado()
			);

		$this->load->view("productos/respuesta_modal_editar",$data);
	}

	public function editar()
	{
		    $id_producto                = $this->input->post("id_producto");
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


			$this->Productos_model->actualizar_producto($id_producto,$data);	

/*SECCION DE PROVEEDORES*/			

			$this->Productos_model->eliminar_producto_proveedores($id_producto);

			for ($i=0; $i < count($provedores); $i++) { 

						$proveedor_producto = array(
							'id_proveedor' => $provedores[$i],
							'id_producto'  => $id_producto
						);

					    $this->Productos_model->agregar_producto_proveedor($proveedor_producto);					
				}	

/*SECCION DE PROVEEDORES*/
			
	}

	public function vista_eliminar($id_producto)
	{
		$data  = array(
				'producto'   => $this->Productos_model->informacion_producto($id_producto), 
			);
		$this->load->view("productos/respuesta_modal_eliminar",$data);
		
	}

	public function eliminar()
	{
			$id_producto            = $this->input->post("id_producto");

			$data = array
					(
						'estado'                 => '0',									
					);	
			$this->Productos_model->actualizar_producto($id_producto,$data);	
			
	}		

}
