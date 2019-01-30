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

		$busqueda= "SELECT * FROM clientes WHERE dni_cliente LIKE '%".$dni."%'";
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
		



	

	/*public function registrar()
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
			$this->Ventas_model->agregar_vendedor($data);	
			
	}

	public function vista_edicion($id_vendedor)
	{
		$data  = array(
				'vendedor'   => $this->Ventas_model->seleccionar_vendedor($id_vendedor), 
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
			$this->Ventas_model->actualizar_vendedor($id_vendedor,$data);	
			
	}

	public function vista_eliminar($id_vendedor)
	{
		$data  = array(
				'vendedor'   => $this->Ventas_model->seleccionar_vendedor($id_vendedor), 
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
			$this->Ventas_model->actualizar_vendedor($id_vendedor,$data);	
			
	}	*/

/*SECCION DE VENTAS NORMALES*/









/*SECCION DE VENTAS A CREDITO*/
public function listado_credito()
	{
		 $data = array(
     		 'vendedores' => $this->Ventas_model->listado(),
    );

		$this->layout->view("listado",$data);

	}	

	public function registrar_credito()
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
			$this->Ventas_model->agregar_vendedor($data);	
			
	}

	public function vista_edicion_credito($id_vendedor)
	{
		$data  = array(
				'vendedor'   => $this->Ventas_model->seleccionar_vendedor($id_vendedor), 
			);

		$this->load->view("vendedores/respuesta_modal_editar.php",$data);
		
	}	

	public function editar_credito()
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
			$this->Ventas_model->actualizar_vendedor($id_vendedor,$data);	
			
	}

	public function vista_eliminar_credito($id_vendedor)
	{
		$data  = array(
				'vendedor'   => $this->Ventas_model->seleccionar_vendedor($id_vendedor), 
			);
		$this->load->view("vendedores/respuesta_modal_eliminar.php",$data);
		
	}

	public function eliminar_credito()
	{
			$id_vendedor            = $this->input->post("id_vendedor");

			$data = array
					(
						'estado'                 => '0',									
					);	
			$this->Ventas_model->actualizar_vendedor($id_vendedor,$data);	
			
	}	

/*SECCION DE VENTAS A CREDITO*/


}
