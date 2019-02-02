<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {


/*SECCION DE VENTAS CONTADO*/
public function listado()
{
	$this->db->select('vc.*,clientes.nombre_cliente as nombre_cliente,clientes.dni_cliente as dni_cliente,productos.codigo_producto as codigo_producto,productos.descripcion_producto as descripcion_producto,vendedores.nombre_vendedor as nombre_vendedor,SUM(vc.precio_producto) as precio_producto');
	$this->db->from('ventas_contado vc');
	$this->db->join('productos productos','vc.id_producto = productos.id_producto');
	$this->db->join('clientes clientes','vc.id_cliente = clientes.id_cliente');
	$this->db->join('vendedores vendedores','vc.id_vendedor = vendedores.id_vendedor');
	$this->db->group_by('vc.codigo_compra');
	$resultados = $this->db->get();
	return $resultados->result();
}

public function informacion_venta($codigo_compra)
{
	$this->db->select('vc.*,productos.codigo_producto as codigo_producto,productos.descripcion_producto as descripcion_producto,productos.precio_producto as precio_producto,productos.impuesto_producto as impuesto_producto');
	$this->db->from('ventas_contado vc');
	$this->db->join('productos productos','vc.id_producto = productos.id_producto');
    $this->db->where("vc.codigo_compra",$codigo_compra);
	$resultados = $this->db->get();
	return $resultados->result();
}


public function agregar_venta_contado($data){

	return $this->db->insert("ventas_contado",$data);
}


/*SECCION DE VENTAS CONTADO*/




/*SECCION DE VENTAS CREDITO*/
public function listado_credito()
{
	$this->db->select('vc.*,clientes.nombre_cliente as nombre_cliente,clientes.dni_cliente as dni_cliente,productos.codigo_producto as codigo_producto,productos.descripcion_producto as descripcion_producto,vendedores.nombre_vendedor as nombre_vendedor');
	$this->db->from('ventas_creditos vc');
	$this->db->join('productos productos','vc.id_producto = productos.id_producto');
	$this->db->join('clientes clientes','vc.id_cliente = clientes.id_cliente');
	$this->db->join('vendedores vendedores','vc.id_vendedor = vendedores.id_vendedor');
	$this->db->group_by('vc.id_cliente');
	$resultados = $this->db->get();
	return $resultados->result();
}

public function agregar_venta_credito($data){
	return $this->db->insert("ventas_creditos",$data);
}

public function informacion_venta_credito($id_cliente){
	$this->db->select('vc.*,clientes.nombre_cliente as nombre_cliente,clientes.dni_cliente as dni_cliente,productos.codigo_producto as codigo_producto,productos.descripcion_producto as descripcion_producto,vendedores.nombre_vendedor as nombre_vendedor,abonos.total_abono as total_abono,abonos.fecha_abono as fecha_abono,SUM(vc.precio_producto) as precio_producto');
	$this->db->from('ventas_creditos vc');
	$this->db->join('productos productos','vc.id_producto = productos.id_producto');
	$this->db->join('clientes clientes','vc.id_cliente = clientes.id_cliente');
	$this->db->join('vendedores vendedores','vc.id_vendedor = vendedores.id_vendedor');
	$this->db->join('abonos abonos','vc.codigo_compra = abonos.id_codigo', 'left');
	$this->db->where("vc.id_cliente",$id_cliente);
	$this->db->group_by('vc.codigo_compra');
	$resultados = $this->db->get();
	return $resultados->result();
}


/*SECCION DE VENTAS CREDITO*/



}
