<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>
                	Listado de Proveedores
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
                    <table id="proveedores" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id del Proveedor</th>
                                 <th>Nombre del Proveedor</th>
                                 <th>Direcci&oacute;n 1 del Proveedor</th>
                                 <th>Pa&iacute;s del Proveedor</th>   
                                 <th>N&uacute;mero del Proveedor</th>                                                              
                                 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($proveedores)):?>
                                 <?php foreach($proveedores as $proveedor):?>
                                     <tr>
                                         <td><?php echo $proveedor->id_proveedor;?></td>    
                                         <td><?php echo $proveedor->nombre_proveedor;?></td>
                                         <td><?php echo $proveedor->direccion_proveedor_1;?></td>
                                         <td><?php echo $proveedor->pais_proveedor;?></td>
                                         <td><?php echo $proveedor->numero_proveedor;?></td>                    
                                         <td>
                                           <button title="Editar Proveedor" type="button" class="btn btn-info boton_editar_proveedores" value="<?php echo $proveedor->id_proveedor; ?>" data-toggle="modal" data-target="#modal_editar">
                                                        <span class="fa fa-pencil"></span>
                                        </button>

                                          <button title="Eliminar Proveedor" type="button" class="btn btn-danger boton_eliminar_proveedores" value="<?php echo $proveedor->id_proveedor; ?>" data-toggle="modal" data-target="#modal_eliminar">
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
