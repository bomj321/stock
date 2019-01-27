<!-- Modal -->
<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="modal_agregar_label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_agregar_label">Agregar Nuevo Producto</h4>
      </div>
<!--FORMULARIO-->
         <form class="form-horizontal" id="formulario_agregar_productos">
          <div class="modal-body">                            

                <div class="form-group">
                      <label for="codigo_producto">Codigo del Producto</label>
                      <input type="text" class="form-control" id="codigo_producto" placeholder="Codigo del Producto" name="codigo_producto" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                    
                </div>
            
                <div class="form-group">
                        <label for="descripcion_producto">Descripci&oacute;n del Producto</label>
                        <input type="text" class="form-control" id="descripcion_producto" placeholder="Descripci&oacute;n del Producto" name="descripcion_producto" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                      
                </div>
                

                <div class="form-group">
                        <label for="precio_producto">Precio del Producto</label>
                        <input type="text" class="form-control" id="precio_producto" placeholder="Precio del Producto" name="precio_producto" required="true" data-validation="number" data-validation-allowing="float">                       
                </div>

                <div class="form-group">
                        <label for="stock_producto">Stock del Producto</label>
                        <input type="text" class="form-control" id="stock_producto" placeholder="Stock del Producto" name="stock_producto" required="true" data-validation="number">                       
                </div>

                <div class="form-group">
                        <label for="impuesto_producto">Impuesto del Producto</label>
                        <input type="text" class="form-control" id="impuesto_producto" placeholder="Impuesto del Producto" name="impuesto_producto" required="true" data-validation="number" data-validation-allowing="float">                       
                </div>

                <div class="form-group">
                        <label for="codigo_categoria">Codigo de la Categoria</label>
                        <input type="text" class="form-control" id="codigo_categoria" placeholder="Codigo de la Categoria" name="codigo_categoria" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="descripcion_categoria">Desripci&oacute;n de la Categoria</label>
                        <input type="text" class="form-control" id="descripcion_categoria" placeholder="Desripci&oacute;n de la Categoria" name="descripcion_categoria" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="subcodigo_categoria">Subcodigo de la Categoria</label>
                        <input type="text" class="form-control" id="subcodigo_categoria" placeholder="Subcodigo de la Categoria" name="subcodigo_categoria" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="subdescripcion_categoria">Descripci&oacute;n de la Categoria</label>
                        <input type="text" class="form-control" id="subdescripcion_categoria" placeholder="Descripci&oacute;n de la Categoria" name="subdescripcion_categoria" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                 <div class="form-group">
                        <label for="codigo_bodega">Codigo de la Bodega</label>
                        <input type="text" class="form-control" id="codigo_bodega" placeholder="Codigo de la Bodega" name="codigo_bodega" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                 <div class="form-group">
                        <label for="descripcion_bodega">Descripci&oacute;n de la Bodega</label>
                        <input type="text" class="form-control" id="descripcion_bodega" placeholder="Descripci&oacute;n de la Bodega" name="descripcion_bodega" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                 <div class="form-group">
                        <label for="codigo_fabricante">Codigo del Fabricante</label>
                        <input type="text" class="form-control" id="codigo_fabricante" placeholder="Codigo del Fabricante" name="codigo_fabricante" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                    <label for="provedores">Seleccionar Proveedores</label>
                       <select multiple class="form-control" name="provedores[]" required id="provedores">
                        <?php foreach ($proveedores as $proveedor ): ?>                                                   
                              <option value="<?php echo $proveedor->id_proveedor ?>"><?php echo $proveedor->nombre_proveedor ?></option>                              
                         <?php endforeach ?>      
                        </select>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Agregar Producto</button>
          </div>
   </form>
<!--FORMULARIO-->    
    </div>
  </div>
</div>