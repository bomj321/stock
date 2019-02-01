<h4><strong>Productos Comprados con Impuestos</strong></h4>
<?php foreach ($ventas as $venta): ?>
		<h5><?php echo '<strong>Cantidad: </strong>'.$venta->cantidad_comprado_producto.' / <strong>Producto: </strong>'.$venta->descripcion_producto.' / <strong>Precio con Impuestos: </strong>'.$venta->cantidad_comprado_producto*($venta->precio_producto + ($venta->precio_producto*($venta->impuesto_producto/100)))?></h5>

<?php endforeach ?>
