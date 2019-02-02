<div class="row">
	
	<div class="col-md-8">
		<?php foreach ($ventas as $venta): ?>
					<div class="informacion">					
									<h5><strong>Compra #N: <?php echo $venta->codigo_compra ?></strong></h5>
								<!--DESCCUENTO-->
									<?php 
										if (!empty($venta->descuento_compra)) {
											$descuento = $venta->descuento_compra;
										}else{
											$descuento = 0;
										}

									 ?>

								<!--DESCCUENTO-->
									<h5><strong>Descuento de la Compra: <?php echo $descuento ?>%</strong></h5>
									<h5>Total de la Compra: <?php echo 	number_format($venta->precio_producto -($venta->precio_producto*($descuento/100)), 3, '.', '')?> <strong>Soles</strong></h5>	
									<?php if (empty($venta->total_abono)): ?>
										<p class="text-danger">No hay Abonos en esta Compra</p>
									  <?php else: ?>
										
									 <?php endif ?>

								<!--ABONOS-->
									<?php 
										if (!empty($venta->total_abono)) {
											$abono = $venta->total_abono;
										}else{
											$abono = 0;
										}

									 ?>

								<!--ABONOS-->

									<h5>Restante de la Compra: <?php echo 	number_format(($venta->precio_producto -($venta->precio_producto*($descuento/100)))-$abono, 3, '.', '')?> <strong>Soles</strong></h5>
								
					</div>
	  <?php endforeach ?>	
	</div>

	<div class="col-md-4">
		<button class="btn btn-success"> Agregar Abono</button>
	</div>
</div>
