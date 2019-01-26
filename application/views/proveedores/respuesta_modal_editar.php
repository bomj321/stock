 <input type="hidden" id='id_proveedor' name="id_proveedor" value="<?php echo $proveedor->id_proveedor?>">                       

                <div class="form-group">
                      <label for="nombre_proveedor_editar">Nombre del Proveedor</label>
                      <input value="<?php echo $proveedor->nombre_proveedor?>" required type="text" class="form-control" id="nombre_proveedor_editar" placeholder="Nombre del Proveedor" name="nombre_proveedor_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                    
                </div>

                <div class="form-group">
                        <label for="direccion_proveedor_1_editar">Direcci&oacute;n 1 del Proveedor</label>
                        <textarea required class="form-control" id="direccion_proveedor_1_editar" placeholder="Direcci&oacute;n 1 del Proveedor" name="direccion_proveedor_1_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+"><?php echo $proveedor->direccion_proveedor_1?></textarea>                       
                </div>

                <div class="form-group">
                        <label for="direccion_proveedor_2_editar">Direcci&oacute;n 2 del Proveedor</label>
                        <textarea required class="form-control" id="direccion_proveedor_2_editar" placeholder="Direcci&oacute;n 2 del Proveedor" name="direccion_proveedor_2_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+"><?php echo $proveedor->direccion_proveedor_2?></textarea>                       
                </div>



                <div class="form-group">
                        <label for="ciudad_proveedor_editar">Ciudad del Proveedor</label>
                        <input value="<?php echo $proveedor->ciudad_proveedor?>" required type="text" class="form-control" id="ciudad_proveedor_editar" placeholder="Ciudad del Proveedor" name="ciudad_proveedor_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                      
                </div>
                

                <div class="form-group">
                        <label for="pais_proveedor_editar">Pa&iacute;s del Proveedor</label>
                        <input value="<?php echo $proveedor->pais_proveedor?>" required type="text" class="form-control" id="pais_proveedor_editar" placeholder="Pa&iacute;s del Proveedor" name="pais_proveedor_editar" required="true"data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="codigo_postal_editar">Codigo Postal del Proveedor</label>
                        <input value="<?php echo $proveedor->codigo_postal?>" required type="text" class="form-control" id="codigo_postal_editar" placeholder="Codigo Postal del Proveedor" name="codigo_postal_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="contacto_proveedor_editar">Contacto del Proveedor</label>
                        <input value="<?php echo $proveedor->contacto_proveedor?>" required type="text" class="form-control" id="contacto_proveedor_editar" placeholder="Contacto del Proveedor" name="contacto_proveedor_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="numero_proveedor_editar">Numero del Proveedor</label>
                        <input value="<?php echo $proveedor->numero_proveedor?>" required type="text" class="form-control" id="numero_proveedor_editar" placeholder="Numero del Proveedor" name="numero_proveedor_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="numero_fax_editar">Numero de Fax</label>
                        <input value="<?php echo $proveedor->numero_fax?>" required type="text" class="form-control" id="numero_fax_editar" placeholder="Numero de Fax" name="numero_fax_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="numero_ruc_editar">Numero de RUC</label>
                        <input value="<?php echo $proveedor->numero_ruc?>" required type="text" class="form-control" id="numero_ruc_editar" placeholder="Numero de RUC" name="numero_ruc_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="web_proveedor_editar">Web del Proveedor</label>
                        <input value="<?php echo $proveedor->web_proveedor?>" required type="text" class="form-control" id="web_proveedor_editar" placeholder="Web del Proveedor" name="web_proveedor_editar" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>
              