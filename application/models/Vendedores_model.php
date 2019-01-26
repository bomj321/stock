<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedores_model extends CI_Model {


public function listado()
{
	$this->db->where("estado",'1');
	$resultados = $this->db->get('vendedores');
	return $resultados->result();
}

public function agregar_vendedor($data){
	return $this->db->insert("vendedores",$data);
}


public function seleccionar_vendedor($id_vendedor){
	    $this->db->where("id_vendedor",$id_vendedor);
		$resultados = $this->db->get('vendedores');
		return $resultados->row();
}

public function actualizar_vendedor($id_vendedor,$data){
	    $this->db->where('id_vendedor', $id_vendedor);
		return $this->db->update('vendedores', $data);	   
}

}
