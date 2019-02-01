<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {


/*SECCION DE VENTAS CONTADO*/
public function listado()
{
	$this->db->select('vc.*,clientes.nombre_cliente as nombre_cliente,clientes.dni_cliente as dni_cliente,productos.codigo_producto as codigo_producto,productos.descripcion_producto as descripcion_producto,vendedores.nombre_vendedor as nombre_vendedor');
	$this->db->from('ventas_contado vc');
	$this->db->join('productos productos','vc.id_producto = productos.id_producto');
	$this->db->join('clientes clientes','vc.id_cliente = clientes.id_cliente');
	$this->db->join('vendedores vendedores','vc.id_vendedor = vendedores.id_vendedor');
	$this->db->group_by('vc.codigo_compra');
	$resultados = $this->db->get();
	return $resultados->result();
}

public function listado_todo($codigo_compra)
{
	$this->db->select('vc.*,clientes.nombre_cliente as nombre_cliente,clientes.dni_cliente as dni_cliente,productos.codigo_producto as codigo_producto,productos.descripcion_producto as descripcion_producto,vendedores.nombre_vendedor as nombre_vendedor');
	$this->db->from('ventas_contado vc');
	$this->db->join('productos productos','vc.id_producto = productos.id_producto');
	$this->db->join('clientes clientes','vc.id_cliente = clientes.id_cliente');
	$this->db->join('vendedores vendedores','vc.id_vendedor = vendedores.id_vendedor');	
    $this->db->where("codigo_compra",$codigo_compra);
	$resultados = $this->db->get();
	return $resultados->result();
}



public function agregar_venta_contado($data){
	return $this->db->insert("ventas_contado",$data);
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
/*SECCION DE VENTAS CONTADO*/




/*SECCION DE VENTAS CREDITO*/
public function listado_credito()
{
	$this->db->where("estado",'1');
	$resultados = $this->db->get('proveedores');
	return $resultados->result();
}

public function agregar_proveedor_credito($data){
	return $this->db->insert("proveedores",$data);
}


public function seleccionar_proveedor_credito($id_proveedor){
	    $this->db->where("id_proveedor",$id_proveedor);
		$resultados = $this->db->get('proveedores');
		return $resultados->row();
}

public function actualizar_proveedor_credito($id_proveedor,$data){
	    $this->db->where('id_proveedor', $id_proveedor);
		return $this->db->update('proveedores', $data);	   
}
/*SECCION DE VENTAS CREDITO*/



}
