<!-- Modal -->
<div class="modal fade" id="modal_agregar" tabindex="-1" role="dialog" aria-labelledby="modal_agregar_label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modal_agregar_label">Agregar Nuevo Cliente</h4>
      </div>
<!--FORMULARIO-->
         <form class="form-horizontal" id="formulario_agregar_clientes">
          <div class="modal-body">                            

                <div class="form-group">
                      <label for="nombre_cliente">Nombre del Cliente</label>
                      <input required type="text" class="form-control" id="nombre_cliente" placeholder="Nombre del Cliente" name="nombre_cliente" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+">                    
                </div>



                <div class="form-group">
                        <label for="dni_cliente">Dni del Cliente</label>
                        <input required type="text" class="form-control" id="dni_cliente" placeholder="Dni del Cliente" name="dni_cliente" required="true" data-validation="alphanumeric">                      
                </div>

                <div class="form-group">
                        <label for="direccion_cliente">Direcci&oacute;n del Cliente</label>
                        <textarea required class="form-control" id="direccion_cliente" placeholder="Direcci&oacute;n del Cliente" name="direccion_cliente" required="true" data-validation="custom" data-validation-regexp="[a-zA-Z0-9\s]+"> </textarea>                       
                </div>

                <div class="form-group">
                        <label for="correo_cliente">Correo del Cliente</label>
                        <input required type="email" class="form-control" id="correo_cliente" placeholder="Correo del Cliente" name="correo_cliente" required="true" data-validation="email">                       
                </div>

                <div class="form-group">
                        <label for="codigo_cliente">Codigo del Cliente</label>
                        <input required type="text" class="form-control" id="codigo_cliente" placeholder="Codigo del Cliente" name="codigo_cliente" required="true" data-validation="number">                       
                </div>
              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Agregar Cliente</button>
          </div>
   </form>
<!--FORMULARIO-->    
    </div>
  </div>
</div>