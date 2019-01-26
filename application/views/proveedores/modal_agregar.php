<!-- Modal -->
<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="modal_agregar_label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_agregar_label">Agregar Nuevo Proveedor</h4>
      </div>
<!--FORMULARIO-->
         <form class="form-horizontal" id="formulario_agregar_proveedores">
          <div class="modal-body">                            

                <div class="form-group">
                      <label for="nombre_proveedor">Nombre del Proveedor</label>
                      <input required type="text" class="form-control" id="nombre_proveedor" placeholder="Nombre del Proveedor" name="nombre_proveedor" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                    
                </div>

                <div class="form-group">
                        <label for="direccion_proveedor_1">Direcci&oacute;n 1 del Proveedor</label>
                        <textarea required class="form-control" id="direccion_proveedor_1" placeholder="Direcci&oacute;n 1 del Proveedor" name="direccion_proveedor_1" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+"> </textarea>                       
                </div>

                <div class="form-group">
                        <label for="direccion_proveedor_2">Direcci&oacute;n 2 del Proveedor</label>
                        <textarea required class="form-control" id="direccion_proveedor_2" placeholder="Direcci&oacute;n 2 del Proveedor" name="direccion_proveedor_2" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+"> </textarea>                       
                </div>



                <div class="form-group">
                        <label for="ciudad_proveedor">Ciudad del Proveedor</label>
                        <input required type="text" class="form-control" id="ciudad_proveedor" placeholder="Ciudad del Proveedor" name="ciudad_proveedor" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                      
                </div>
                

                <div class="form-group">
                        <label for="pais_proveedor">Pa&iacute;s del Proveedor</label>
                        <input required type="text" class="form-control" id="pais_proveedor" placeholder="Pa&iacute;s del Proveedor" name="pais_proveedor" required="true"data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="codigo_postal">Codigo Postal del Proveedor</label>
                        <input required type="text" class="form-control" id="codigo_postal" placeholder="Codigo Postal del Proveedor" name="codigo_postal" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="contacto_proveedor">Contacto del Proveedor</label>
                        <input required type="text" class="form-control" id="contacto_proveedor" placeholder="Contacto del Proveedor" name="contacto_proveedor" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="numero_proveedor">Numero del Proveedor</label>
                        <input required type="text" class="form-control" id="numero_proveedor" placeholder="Numero del Proveedor" name="numero_proveedor" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="numero_fax">Numero de Fax</label>
                        <input required type="text" class="form-control" id="numero_fax" placeholder="Numero de Fax" name="numero_fax" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="numero_ruc">Numero de RUC</label>
                        <input required type="text" class="form-control" id="numero_ruc" placeholder="Numero de RUC" name="numero_ruc" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>

                <div class="form-group">
                        <label for="web_proveedor">Web del Proveedor</label>
                        <input required type="text" class="form-control" id="web_proveedor" placeholder="Web del Proveedor" name="web_proveedor" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                       
                </div>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Agregar Proveedor</button>
          </div>
   </form>
<!--FORMULARIO-->    
    </div>
  </div>
</div>