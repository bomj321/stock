<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>
                	Listado de Productos
                	<button type="button" style="margin-left: 5px;" class="btn btn-primary" data-toggle="modal" data-target="#modal_agregar"><span class="fa fa-plus"></span>Agregar</button>
                </h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
<!--CONTENIDO-->

                  <div class="x_content">
                    <table id="productos" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id del Producto</th>
                                 <th>Codigo del Producto</th>
                                 <th>Descripci&oacute;n del Producto</th>
                                 <th>Precio del Producto</th>   
                                 <th>Stock del Producto</th>                                                              
                                 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($productos)):?>
                                 <?php foreach($productos as $producto):?>
                                     <tr>
                                         <td><?php echo $producto->id_producto;?></td>    
                                         <td><?php echo $producto->codigo_producto;?></td>
                                         <td><?php echo $producto->descripcion_producto;?></td>
                                         <td><?php echo $producto->precio_producto;?></td>
                                         <td><?php echo $producto->stock_producto;?></td>                    
                                         <td>
                                           <button title="Editar Producto" type="button" class="btn btn-info boton_editar_proveedores" value="<?php echo $producto->id_producto; ?>" data-toggle="modal" data-target="#modal_editar">
                                                        <span class="fa fa-pencil"></span>
                                        </button>

                                          <button title="Eliminar Producto" type="button" class="btn btn-danger boton_eliminar_proveedores" value="<?php echo $producto->id_producto; ?>" data-toggle="modal" data-target="#modal_eliminar">
                                                        <span class="fa fa-trash-o"></span>
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
<?php require_once ('modal_editar.php') ?>
<?php require_once ('modal_eliminar.php') ?>

<!--Modales-->

              </div>
             </div>
            </div>
          </div>
</div>
