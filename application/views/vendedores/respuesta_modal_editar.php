
                  <input type="hidden" name="id_vendedor" value="<?php echo $vendedor->id_vendedor?>"> 

                 <div class="form-group">
                      <label for="nombre_vendedor_editar">Nombre del Vendedor</label>
                      <input value="<?php echo $vendedor->nombre_vendedor ?>" required type="text" class="form-control" id="nombre_vendedor_editar" placeholder="Nombre del Vendedor" name="nombre_vendedor_editar" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                    
                </div>

                <div class="form-group">
                        <label for="dni_vendedor_editar">DNI del Vendedor</label>
                        <input value="<?php echo $vendedor->dni_vendedor ?>" required type="text" class="form-control" id="dni_vendedor_editar" placeholder="DNI del Vendedor" name="dni_vendedor_editar" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                      
                </div>            

                <div class="form-group">
                        <label for="correo_vendedor_editar">Correo del Proveedor</label>
                        <input value="<?php echo $vendedor->correo_vendedor ?>" required type="email" class="form-control" id="correo_vendedor_editar" placeholder="Correo del Proveedor" name="correo_vendedor_editar" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                      
                </div>         