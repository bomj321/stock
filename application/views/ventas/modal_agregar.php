<!-- Modal -->
<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="modal_agregar_label">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_agregar_label">Realizar Venta</h4>
      </div>
<!--FORMULARIO-->
     <form class="form-horizontal" id="formulario_venta_contado">
          <div class="modal-body">                            
              <div class="row">
                      <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="form-group">
                                  <label for="dni_cliente">DNI del Cliente</label>
                                  <input required type="text" class="form-control" id="dni_cliente" placeholder="DNI del Cliente" name="dni_cliente" >  
                                <!--INPUT DEL ID DEL CLIENTE-->
                                <input type="hidden" id="id_cliente" name="id_cliente">
                                <!--INPUT DEL ID DEL CLIENTE-->                                        
                            </div>
                      </div>

                      <div class="col-md-4 col-sm-12 col-xs-12">
                           <div class="form-group">
                                <label for="nombre_cliente">Nombre del Cliente</label>
                                <input  type="text" class="form-control" id="nombre_cliente" placeholder="Nombre del Cliente" name="nombre_cliente" disabled>  
                           </div>
                      </div> 

                      <div class="col-md-4 col-sm-12 col-xs-12">
                           <div class="form-group">
                                <label for="correo_cliente">Correo del Cliente</label>
                                <input  type="text" class="form-control" id="correo_cliente" placeholder="Correo del Cliente" name="correo_cliente" disabled>  
                           </div>
                      </div>                
            </div>

            <div class="row">
               <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                  <label for="description_producto">Producto</label>
                                  <input required type="text" class="form-control" id="description_producto" placeholder="Producto" name="description_producto" >  
                                <!--INPUT DEL ID DEL CLIENTE-->
                                <input type="hidden" id="id_producto" name="id_producto">
                                <!--INPUT DEL ID DEL CLIENTE-->                                        
                            </div>
                </div>

                 <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                                <label for="codigo_producto">Codigo del Producto</label>
                                <input  type="text" class="form-control" id="codigo_producto" placeholder="Codigo del Producto" name="codigo_producto" disabled>  
                           </div>
                  </div>

                  <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                                <label for="comentario_venta">Comentario de la Venta</label>
                                <input  type="text" class="form-control" id="comentario_venta" placeholder="Comentario de la Venta" name="comentario_venta">  
                           </div>
                  </div>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                           <div class="form-group">
                            <label for="cantidad_comprado_producto">Cantidad a Vender</label>
                               <div class="input-group">                                   
                                    <input name='cantidad_comprado_producto' id='cantidad_comprado_producto' type="text" class="form-control" placeholder="Cantidad a Vender" aria-describedby="addon_cantidad">
                                    <span class="input-group-addon" id="addon_cantidad" ><span class="glyphicon glyphicon-plus"></span></span>
                                </div>
                           </div>
                  </div>

<!--INPUT ESCONDIDO CON MAS INFORMACION-->
<input type="hidden" id="informacion_producto" name="id="informacion_producto"">

<!--INPUT ESCONDIDO CON MAS INFORMACION-->
            </div>

            <div class="row">

                <table id="tbventas" class="table table-bordered table-hover bulk_action dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Descripcion</th>
                                        <th>Cantidad</th>
                                        <th>Precio Unitario</th>
                                        <th>Impuesto Agregado</th>
                                        <th>Subtotal</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>
            </div>
<!--PARTE DE LOS TOTALES-->                
             <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4">
                              <div class="form-group">
                                <label for="subtotal">Subtotal</label>
                                <input type="text" class="form-control" id="subtotal" placeholder="Subtotal" disabled>
                           </div>
                  </div>    
             </div> 

              <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4">
                            <div class="form-group">
                                <label for="descuento_compra">Descto.</label>
                                <input type="text" class="form-control" id="descuento_compra" name='descuento_compra' placeholder="Descuento">
                           </div>
                  </div>  

                  <div class="col-md-3">
                     <div class="form-group">
                                <label for="descuento_total">Descto. Total</label>
                                <input type="text" class="form-control" id="descuento_total" name='descuento_total' placeholder="Descuento Total" disabled>
                           </div>
                  </div>  
             </div>

              <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4">
                              <div class="form-group">
                                <label for="total">Total de la Compra</label>
                                <input type="text" class="form-control" id="total" placeholder="Total" readonly>
                           </div>
                  </div>    
             </div> 


<!--PARTE DE LOS TOTALES-->              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Realizar Venta</button>
          </div>
   </form>
<!--FORMULARIO-->    
    </div>
  </div>
</div>