<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>
                	Listado de Vendedores
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
                    <table id="vendedores" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id del Vendedores</th>
                                 <th>Nombre del Vendedor</th>
                                 <th>DNI del Vendedor</th>
                                 <th>Correo del Vendedor</th>   
                                 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($vendedores)):?>
                                 <?php foreach($vendedores as $vendedor):?>
                                     <tr>
                                         <td><?php echo $vendedor->id_vendedor;?></td>    
                                         <td><?php echo $vendedor->nombre_vendedor;?></td>
                                         <td><?php echo $vendedor->dni_vendedor;?></td>
                                         <td><?php echo $vendedor->correo_vendedor;?></td>
                                         <td>
                                           <button title="Editar Vendedor" type="button" class="btn btn-info boton_editar_vendedores" value="<?php echo $vendedor->id_vendedor; ?>" data-toggle="modal" data-target="#modal_editar">
                                                        <span class="fa fa-pencil"></span>
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

<!--Modales-->

              </div>
             </div>
            </div>
          </div>
</div>
