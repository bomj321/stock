<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedores_model extends CI_Model {


public function listado()
{
	$this->db->where("estado",'1');
	$resultados = $this->db->get('proveedores');
	return $resultados->result();
}

public function agregar_proveedor($data){
	return $this->db->insert("proveedores",$data);
}


public function seleccionar_proveedor($id_proveedor){
	    $this->db->where("id_proveedor",$id_proveedor);
		$resultados = $this->db->get('proveedores');
		return $resultados->row();
}

public function actualizar_proveedor($id_proveedor,$data){
	    $this->db->where('id_proveedor', $id_proveedor);
		return $this->db->update('proveedores', $data);	   
}

}
