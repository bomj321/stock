                <input type="hidden" id='id_producto' name='id_producto' value="<?php echo $producto->id_producto?>">

                <div class="form-group">
                      <label for="codigo_producto_editar">Codigo del Producto</label>
                      <input name='codigo_producto_editar' value='<?php echo $producto->codigo_producto ?>' required type="text" class="form-control" id="codigo_producto_editar" >                    
                </div>
            
                <div class="form-group">
                        <label for="descripcion_producto_editar">Descripci&oacute;n del Producto</label>
                        <input name='descripcion_producto_editar' value='<?php echo $producto->descripcion_producto ?>' required type="text" class="form-control" id="descripcion_producto_editar">                      
                </div>
                

                <div class="form-group">
                        <label for="precio_producto_editar">Precio del Producto</label>
                        <input name='precio_producto_editar' value='<?php echo $producto->precio_producto ?>' required type="text" class="form-control" id="precio_producto_editar" >                       
                </div>

                <div class="form-group">
                        <label for="stock_producto_editar">Stock del Producto</label>
                        <input name='stock_producto_editar' value='<?php echo $producto->stock_producto ?>' required type="text" class="form-control" id="stock_producto_editar">                       
                </div>

                <div class="form-group">
                        <label for="impuesto_producto_editar">Impuesto del Producto</label>
                        <input name='impuesto_producto_editar' value='<?php echo $producto->impuesto_producto ?>' required type="text" class="form-control" id="impuesto_producto_editar">                       
                </div>

                <div class="form-group">
                        <label for="codigo_categoria_editar">Codigo de la Categoria</label>
                        <input name='codigo_categoria_editar' value='<?php echo $producto->codigo_categoria ?>' required type="text" class="form-control" id="codigo_categoria_editar">                       
                </div>

                <div class="form-group">
                        <label for="descripcion_categoria_editar">Desripci&oacute;n de la Categoria</label>
                        <input name='descripcion_categoria_editar' value='<?php echo $producto->descripcion_categoria ?>' required type="text" class="form-control" id="descripcion_categoria_editar">                       
                </div>

                <div class="form-group">
                        <label for="subcodigo_categoria_editar">Subcodigo de la Categoria</label>
                        <input name='subcodigo_categoria_editar' value='<?php echo $producto->subcodigo_categoria ?>' required type="text" class="form-control" id="subcodigo_categoria_editar">                       
                </div>

                <div class="form-group">
                        <label for="subdescripcion_categoria_editar">Descripci&oacute;n de la Categoria</label>
                        <input name='subdescripcion_categoria_editar' value='<?php echo $producto->subdescripcion_categoria ?>' required type="text" class="form-control" id="subdescripcion_categoria_editar">                       
                </div>

                 <div class="form-group">
                        <label for="codigo_bodega_editar">Codigo de la Bodega</label>
                        <input name='codigo_bodega_editar' value='<?php echo $producto->codigo_bodega ?>' required type="text" class="form-control" id="codigo_bodega_editar">                       
                </div>

                 <div class="form-group">
                        <label for="descripcion_bodega_editar">Descripci&oacute;n de la Bodega</label>
                        <input name='descripcion_bodega_editar' value='<?php echo $producto->descripcion_bodega ?>' required type="text" class="form-control" id="descripcion_bodega_editar">                       
                </div>

                 <div class="form-group">
                        <label for="codigo_fabricante_editar">Codigo del Fabricante</label>
                        <input name='codigo_fabricante_editar' value='<?php echo $producto->codigo_fabricante ?>' required type="text" class="form-control" id="codigo_fabricante_editar">                       
                </div>
              
                <label for="provedores_editar">Seleccionar Proveedores</label>
                   <select required multiple class="form-control" id="provedores_editar" name="provedores_editar[]">
                    <?php foreach ($proveedores as $proveedor ): ?>                                                   
                          <option <?php echo in_array($proveedor->id_proveedor, $producto_proveedores) ? 'selected' : '' ?> value="<?php echo $proveedor->id_proveedor ?>"><?php echo $proveedor->nombre_proveedor ?></option>                              
                     <?php endforeach ?>      
                </select>