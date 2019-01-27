                <div class="form-group">
                      <label for="codigo_producto">Codigo del Producto</label>
                      <input value='<?php echo $producto->codigo_producto ?>' disabled type="text" class="form-control" id="codigo_producto" >                    
                </div>
            
                <div class="form-group">
                        <label for="descripcion_producto">Descripci&oacute;n del Producto</label>
                        <input value='<?php echo $producto->descripcion_producto ?>' disabled type="text" class="form-control" id="descripcion_producto">                      
                </div>
                

                <div class="form-group">
                        <label for="precio_producto">Precio del Producto</label>
                        <input value='<?php echo $producto->precio_producto ?>' disabled type="text" class="form-control" id="precio_producto" >                       
                </div>

                <div class="form-group">
                        <label for="stock_producto">Stock del Producto</label>
                        <input value='<?php echo $producto->stock_producto ?>' disabled type="text" class="form-control" id="stock_producto">                       
                </div>

                <div class="form-group">
                        <label for="impuesto_producto">Impuesto del Producto</label>
                        <input value='<?php echo $producto->impuesto_producto ?>' disabled type="text" class="form-control" id="impuesto_producto">                       
                </div>

                <div class="form-group">
                        <label for="codigo_categoria">Codigo de la Categoria</label>
                        <input value='<?php echo $producto->codigo_categoria ?>' disabled type="text" class="form-control" id="codigo_categoria">                       
                </div>

                <div class="form-group">
                        <label for="descripcion_categoria">Desripci&oacute;n de la Categoria</label>
                        <input value='<?php echo $producto->descripcion_categoria ?>' disabled type="text" class="form-control" id="descripcion_categoria">                       
                </div>

                <div class="form-group">
                        <label for="subcodigo_categoria">Subcodigo de la Categoria</label>
                        <input value='<?php echo $producto->subcodigo_categoria ?>' disabled type="text" class="form-control" id="subcodigo_categoria">                       
                </div>

                <div class="form-group">
                        <label for="subdescripcion_categoria">Descripci&oacute;n de la Categoria</label>
                        <input value='<?php echo $producto->subdescripcion_categoria ?>' disabled type="text" class="form-control" id="subdescripcion_categoria">                       
                </div>

                 <div class="form-group">
                        <label for="codigo_bodega">Codigo de la Bodega</label>
                        <input value='<?php echo $producto->codigo_bodega ?>' disabled type="text" class="form-control" id="codigo_bodega">                       
                </div>

                 <div class="form-group">
                        <label for="descripcion_bodega">Descripci&oacute;n de la Bodega</label>
                        <input value='<?php echo $producto->descripcion_bodega ?>' disabled type="text" class="form-control" id="descripcion_bodega">                       
                </div>

                 <div class="form-group">
                        <label for="codigo_fabricante">Codigo del Fabricante</label>
                        <input value='<?php echo $producto->codigo_fabricante ?>' disabled type="text" class="form-control" id="codigo_fabricante">                       
                </div>
              
                <label for="provedores">Seleccionar Proveedores</label>
                   <select disabled multiple class="form-control" id="provedores">
                    <?php foreach ($proveedores as $proveedor ): ?>                                                   
                          <option <?php echo in_array($proveedor->id_proveedor, $producto_proveedores) ? 'selected' : '' ?> value="<?php echo $proveedor->id_proveedor ?>"><?php echo $proveedor->nombre_proveedor ?></option>                              
                     <?php endforeach ?>      
                </select>