<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if (!$this->session->userdata("login")) {
			redirect(base_url()."login");
		}
		$this->load->model('Ventas_model');
	}

/*SECCION DE VENTAS NORMALES*/

	public function listadocontado()
	{
		 $data = array(
     		 'ventas_contado' => $this->Ventas_model->listado(),
    );

		$this->layout->view("listado",$data);

	}	

	public function respuesta_clientes()
	{
				$dni = $_GET['term'];		

				$busqueda= "SELECT * FROM clientes WHERE nombre_cliente != 'Administrador' AND dni_cliente LIKE '%".$dni."%'";
				$busqueda_dni = $this->db->query($busqueda);
				
				$return_arr = array();	
			
			/* Retrieve and store in array the results of the query.*/
			foreach($busqueda_dni->result_array() as $row) {
				$row_array['value']          = $row['dni_cliente'];
				$row_array['id_cliente']     = $row['id_cliente'];
				$row_array['nombre_cliente'] = $row['nombre_cliente'];		
				$row_array['correo_cliente'] =$row['correo_cliente'];		
				array_push($return_arr,$row_array);
		    }

		       
				/* Free connection resources. */
				/*mysqli_close($connection);*/
				/* Toss back results as json encoded array. */
				echo json_encode($return_arr);
	
	}

	public function respuesta_productos()
	{
				$producto = $_GET['term'];
				$busqueda= "SELECT * FROM productos WHERE descripcion_producto LIKE '%".$producto."%'";
				$busqueda_producto = $this->db->query($busqueda);
				
				$return_arr = array();	
			
			/* Retrieve and store in array the results of the query.*/
			foreach($busqueda_producto->result_array() as $row) {
				$row_array['value']               = $row['descripcion_producto'];
				$row_array['id_producto']         = $row['id_producto'];
				$row_array['codigo_producto']     = $row['codigo_producto'];		
				$row_array['precio_producto']     = $row['precio_producto'];
				$row_array['impuesto_producto']   = $row['impuesto_producto'];		
				array_push($return_arr,$row_array);
		    }

		       
				/* Free connection resources. */
				/*mysqli_close($connection);*/
				/* Toss back results as json encoded array. */
				echo json_encode($return_arr);
	
	}
		

	public function respuesta_vendedores()
	{
				$vendedor = $_GET['term'];
				$busqueda= "SELECT * FROM vendedores WHERE nombre_vendedor LIKE '%".$vendedor."%'";
				$busqueda_vendedor = $this->db->query($busqueda);
				
				$return_arr = array();	
			
			/* Retrieve and store in array the results of the query.*/
			foreach($busqueda_vendedor->result_array() as $row) {
				$row_array['value']               = $row['nombre_vendedor'];
				$row_array['id_vendedor']         = $row['id_vendedor'];				
				array_push($return_arr,$row_array);
		    }

		       
				/* Free connection resources. */
				/*mysqli_close($connection);*/
				/* Toss back results as json encoded array. */
				echo json_encode($return_arr);
	
	}

	

public function venta_contado()
	{
		    $id_cliente                   = $this->input->post("id_cliente");
			$id_producto                  = $this->input->post("id_producto");
			$id_vendedor                  = $this->input->post("id_vendedor");

			$cantidad_comprado_producto   = $this->input->post("cantidad_comprado_producto");
			$precio_producto              = $this->input->post("precio_producto");
			$comentario_venta             = $this->input->post("comentario_venta");

			$codigo_compra                = time();
			$descuento_compra             = $this->input->post("descuento_compra");
			$fecha_compra                 = date('Y-m-d');
						

			for ($i=0; $i < count($id_producto); $i++) {
				$data = array
								(
									'id_cliente'                  => trim($id_cliente),
									'id_producto'                 => trim($id_producto[$i]),
									'id_vendedor'                 => trim($id_vendedor),
									'cantidad_comprado_producto'  => trim($cantidad_comprado_producto[$i]),
									'precio_producto'             => trim($precio_producto[$i]),
									'comentario_venta'            => trim($comentario_venta[$i]),
									'codigo_compra'               => trim($codigo_compra),
									'descuento_compra'            => trim($descuento_compra),
									'fecha_compra'                => trim($fecha_compra),
											
							
								);	
						$this->Ventas_model->agregar_venta_contado($data);	
			}

			


			
	}

public function vista_informacion($codigo_compra){			

		    $data  = array(
				'ventas'       => $this->Ventas_model->informacion_venta($codigo_compra),
				
			);

		$this->load->view("ventas/respuesta_modal_informacion",$data);
	}	



/*SECCION DE VENTAS NORMALES*/



/*SECCION DE VENTAS A CREDITO*/
public function listadocredito()
{
		 $data = array(
     		 'ventas_credito' => $this->Ventas_model->listado_credito(),
    );

		$this->layout->view("listado_credito",$data);

}	

public function venta_credito()
	{
		    $id_cliente                   = $this->input->post("id_cliente");
			$id_producto                  = $this->input->post("id_producto");
			$id_vendedor                  = $this->input->post("id_vendedor");

			$cantidad_comprado_producto   = $this->input->post("cantidad_comprado_producto");
			$precio_producto              = $this->input->post("precio_producto");
			$comentario_venta             = $this->input->post("comentario_venta");

			$codigo_compra                = time();
			$descuento_compra             = $this->input->post("descuento_compra");
			$fecha_compra                 = date('Y-m-d');
						

			for ($i=0; $i < count($id_producto); $i++) {
				$data = array
								(
									'id_cliente'                  => trim($id_cliente),
									'id_producto'                 => trim($id_producto[$i]),
									'id_vendedor'                 => trim($id_vendedor),
									'cantidad_comprado_producto'  => trim($cantidad_comprado_producto[$i]),
									'precio_producto'             => trim($precio_producto[$i]),
									'comentario_venta'            => trim($comentario_venta[$i]),
									'codigo_compra'               => trim($codigo_compra),
									'descuento_compra'            => trim($descuento_compra),
									'fecha_compra'                => trim($fecha_compra),
											
							
								);	
						$this->Ventas_model->agregar_venta_credito($data);	
			}

			


			
	}

public function vista_informacion_credito($codigo_compra){			

		 /*   $data  = array(
				'ventas'       => $this->Ventas_model->informacion_venta($codigo_compra),
				
			);*/

		$this->load->view("ventas/respuesta_modal_informacion_credito"/*,$data*/);
	}			

/*SECCION DE VENTAS A CREDITO*/


}
