<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
/*SECCION DEL LOGIN*/
	public function login($nombre_cliente, $dni_cliente)
	{
		$this->db->where("nombre_cliente", $nombre_cliente);
		$this->db->where("dni_cliente", sha1($dni_cliente));
		$resultados = $this->db->get("clientes");
  		if ($resultados->num_rows() > 0) {
  			return $resultados->row();
  		}
  		else{
  			return false;
  		}
	}
/*SECCION DEL LOGIN*/

/*SECCION DEL LOGIN*/

	public function listado()
	{
		$this->db->where("estado",'1');
		$this->db->where("nombre_cliente !=",'Administrador');
		$resultados = $this->db->get('clientes');
		return $resultados->result();
	}


/*SECCION DEL LOGIN*/	

/*SECCION DE LOS CLIENTES*/
public function agregar_cliente($data){
	return $this->db->insert("clientes",$data);
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
