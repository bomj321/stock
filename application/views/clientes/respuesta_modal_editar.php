<input type="hidden" name="id_cliente" value="<?php echo $cliente->id_cliente?>">
                <div class="form-group">
                      <label for="nombre_cliente_editar">Nombre del Cliente</label>
                      <input value="<?php echo $cliente->nombre_cliente?>" required type="text" class="form-control" id="nombre_cliente_editar" placeholder="Nombre del Cliente" name="nombre_cliente_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                    
                </div>

                <div class="form-group">
                        <label for="dni_cliente_editar">Dni del Cliente</label>
                        <input value="<?php echo $cliente->dni_cliente?>" required type="text" class="form-control" id="dni_cliente_editar" placeholder="Dni del Cliente" name="dni_cliente_editar" required="true" data-validation="alphanumeric">                      
                </div>

                <div class="form-group">
                        <label for="direccion_cliente_editar">Direcci&oacute;n del Cliente</label>
                        <textarea required class="form-control" id="direccion_cliente" placeholder="Direcci&oacute;n del Cliente" name="direccion_cliente_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+"><?php echo $cliente->direccion_cliente?></textarea>                       
                </div>

                <div class="form-group">
                        <label for="correo_cliente_editar">Correo del Cliente</label>
                        <input value="<?php echo $cliente->correo_cliente?>" required type="email" class="form-control" id="correo_cliente_editar" placeholder="Correo del Cliente" name="correo_cliente_editar" required="true" data-validation="email">                       
                </div>

                <div class="form-group">
                        <label for="codigo_cliente_editar">Codigo del Cliente</label>
                        <input value="<?php echo $cliente->codigo_cliente?>" required type="text" class="form-control" id="codigo_cliente_editar" placeholder="Codigo del Cliente" name="codigo_cliente_editar" required="true" data-validation="number">                       
                </div>