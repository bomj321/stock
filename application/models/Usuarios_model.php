<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

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

}
