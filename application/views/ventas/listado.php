<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>
                	Ventas de Contado
                	<button type="button" style="margin-left: 5px;" class="btn btn-primary" data-toggle="modal" data-target="#modal_agregar"><span class="fa fa-plus"></span>Realizar Venta</button>
                </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
<!--CONTENIDO-->

                  <div class="x_content">
                    <table id="ventas_contado" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id de la Venta</th>
                                 <th>Nombre del Cliente</th>
                                 <th>Nombre del Vendedor</th>
                                 <th>Codigo de la Compra</th>   
                                 <th>Fecha de la Compra</th>                                                              
                                 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($ventas_contado)):?>
                                 <?php foreach($ventas_contado as $venta_contado):?>
                                     <tr>
                                         <td><?php echo $venta_contado->id_venta_contado;?></td>    
                                         <td><?php echo $venta_contado->nombre_cliente;?></td>
                                         <td><?php echo $venta_contado->nombre_vendedor;?></td>
                                         <td><?php echo $venta_contado->codigo_compra;?></td>
                                         <td><?php echo $venta_contado->fecha_compra;?></td>                    
                                         <td>
                                          <button title="Informaci&oacute;n de la Venta" type="button" class="btn btn-primary boton_informacion_productos" value="<?php echo $venta_contado->id_venta_contado; ?>" data-toggle="modal" data-target="#modal_informacion">
                                                        <span class="fa fa-eye"></span>
                                        </button>  
                                                                            
                                         
                                           
                                        </td>

                                     </tr>
                                 <?php endforeach;?>
                             <?php endif;?>
                         </tbody>
                     </table>



                </div>
<!--CONTENIDO-->

<!--Modales-->
<?php require_once ('modal_agregar.php') ?>
<?php require_once ('modal_informacion.php') ?>

<!--Modales-->

              </div>
             </div>
            </div>
          </div>
</div>
