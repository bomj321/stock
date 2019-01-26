<div class="right_col" role="main">
	   <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>
                	Listado de Clientes Registrados
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
                    <table id="clientes" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                         <thead>
                             <tr>
                                 <th>Id del Cliente</th>
                                 <th>Nombre del Cliente</th>
                                 <th>DNI del Cliente</th>
                                 <th>Direcci&oacute;n del Cliente</th>
                                 <th>Correo del Cliente</th>
                                 <th>Codigo del Cliente</th>
                                 <th>Acciones</th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php if(!empty($clientes)):?>
                                 <?php foreach($clientes as $cliente):?>
                                     <tr>
                                         <td><?php echo $cliente->id_cliente;?></td>
                                         <td><?php echo $cliente->nombre_cliente;?></td>
                                         <td><?php echo $cliente->dni_cliente;?></td>
                                         <td><?php echo $cliente->direccion_cliente;?></td>
                                         <td><?php echo $cliente->correo_cliente;?></td>
                                         <td><?php echo $cliente->codigo_cliente;?></td>                                       
                                         <td>
                                           <button title="Editar Cliente" type="button" class="btn btn-info boton_editar_clientes" value="<?php echo $cliente->id_cliente; ?>" data-toggle="modal" data-target="#modal_editar">
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
