<div class="modal" id="modalFormDatosContacto" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Datos de contacto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    Empleado: <span class="nombre"></span>
                </p> 
                <div class="row">
                <form id="formContacto" method="post">
                <input type="hidden" id="inputIdEmpleadoContacto" name="id" value="0">
                    <table class="table table-striped">
                        <thead>
                        <th>Tipo de contacto</th>
                        <th>Dato</th>
                        <th>
                            <button type="button" class="btn btn-success" id="agregarDatoContacto">Agregar dato</button>
                        </th>
                        </thead>
                        
                        <tbody id="tbodyDatosContactoEmpleado">

                        </tbody>
                        
                    </table>
                </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success" id="btnGuardarContacto">Guardar</button>
            </div>
        </div>
    </div>
</div>