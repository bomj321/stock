<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {

/*SECCION DE LOS CLIENTES*/
public function listado()
	{
		$this->db->where("estado",'1');
		$resultados = $this->db->get('productos');
		return $resultados->result();
	}

	
public function agregar_producto($data){	

	 $this->db->insert("productos",$data);
	 $ultimo_id = $this->db->insert_id();
	 return $ultimo_id;
}

public function agregar_producto_proveedor($proveedor_producto){	
	
	return $this->db->insert("proveedores_productos",$proveedor_producto);
	
}

public function informacion_producto($id_producto){
	    $this->db->where("id_producto",$id_producto);
		$resultados = $this->db->get('productos');
		return $resultados->row();
}

public function producto_proveedores($id_producto){
	    $this->db->where("id_producto",$id_producto);
		$resultados = $this->db->get('proveedores_productos');
		return $resultados->result();
}

public function eliminar_producto_proveedores($id_producto){
	        $this->db->where('id_producto', $id_producto);
			$this->db->delete('proveedores_productos');
}

public function actualizar_producto($id_producto,$data){
	    $this->db->where('id_producto', $id_producto);
		return $this->db->update('productos', $data);	   
}
/*SECCION DE LOS CLIENTES*/


}
