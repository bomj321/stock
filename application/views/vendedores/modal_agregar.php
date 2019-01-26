<!-- Modal -->
<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="modal_agregar_label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_agregar_label">Agregar Nuevo Vendedor</h4>
      </div>
<!--FORMULARIO-->
         <form class="form-horizontal" id="formulario_agregar_vendedores">
          <div class="modal-body">                            

                <div class="form-group">
                      <label for="nombre_vendedor">Nombre del Vendedor</label>
                      <input required type="text" class="form-control" id="nombre_vendedor" placeholder="Nombre del Vendedor" name="nombre_vendedor" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                    
                </div>

                <div class="form-group">
                        <label for="dni_vendedor">DNI del Vendedor</label>
                        <input required type="text" class="form-control" id="dni_vendedor" placeholder="DNI del Vendedor" name="dni_vendedor" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                      
                </div>   

                <div class="form-group">
                        <label for="correo_vendedor">Correo del Proveedor</label>
                        <input required type="email" class="form-control" id="correo_vendedor" placeholder="Correo del Proveedor" name="correo_vendedor" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                      
                </div>
                 
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Agregar Vendedor</button>
          </div>
   </form>
<!--FORMULARIO-->    
    </div>
  </div>
</div>