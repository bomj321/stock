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


public function seleccionar_cliente($id_cliente){
	    $this->db->where("id_cliente",$id_cliente);
		$resultados = $this->db->get('clientes');
		return $resultados->row();
}

public function actualizar_cliente($id_cliente,$data){
	    $this->db->where('id_cliente', $id_cliente);
		return $this->db->update('clientes', $data);	   
}
/*SECCION DE LOS CLIENTES*/


}
