<div class="card">
  <div class="card-header headPadre">Nuevo Registro </div>
    <div class="card-body">
    <div class="card">
        <div class="card-header headHijo ">Datos generales de la llamada de emergencia:</div>
            <div class="card-body">

            <form action="?c=violenciaGenero&a=Guardar" class="was-validated" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-floating col-md-4">
                            <input type="text" class="form-control" placeholder="&nbsp Tipo de Violencia" name="tipoViolencia" autocomplete="off" required>
                            <label >&nbsp Tipo de Violencia</label>
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Campo requerido, favor de validar</div>
                        </div>
                        <div class="form-floating col-md-4">
                            <input type="text" class="form-control"  placeholder=">&nbsp Ubicación del Hecho" name="ubicacionHecho" autocomplete="off" required>
                            <label > &nbsp Ubicación del Hecho</label>
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Campo requerido, favor de validar</div>
                        </div>
                        <div class="form-floating col-md-4">
                            <input type="text" class="form-control"  placeholder=">&nbsp Teléfono reportante" name="telReportante" autocomplete="off" required>
                            <label > &nbsp Teléfono reportante</label>
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Campo requerido, favor de validar</div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-floating col-md-4">
                            <input type="text" class="form-control" placeholder="&nbsp Nombre de la o las víctimas" name="nomVictimas" autocomplete="off" required>
                            <label >&nbsp Nombre de la o las víctimas</label>
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Campo requerido, favor de validar</div>
                        </div>
                        <div class="form-floating col-md-4">
                        <textarea class="form-control"  name="caracteristicas" placeholder="&nbsp Características de la víctima nombre del agresor" autocomplete="off" required></textarea>
                            <label > &nbsp Características de la víctima nombre del agresor</label>
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Campo requerido, favor de validar</div>
                        </div>
                        <div class="form-floating col-md-4">
                            <input type="text" class="form-control"  placeholder=">&nbsp Horario de llamadas" name="horaLLamadas" autocomplete="off" required>
                            <label>  &nbsp Horario de llamadas</label>
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Campo requerido, favor de validar</div>
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-2">
                        <button type="submit" class="btn btn-success"><i class="bi bi-send-plus-fill" aria-hidden="true"></i> &nbsp;Guardar</button>
                        </div>
                        <div class="col-md-2">
                        <a id="salir" href="?c=violenciaGenero&a=Index" class="btn btn-danger"><i class="bi bi-x-circle-fill" aria-hidden="true"></i>&nbsp;Cancelar</a>
                        </div>
                    </div>
            </form>

            </div>
    </div>
            
    </div>
  
 
</div>
<br>


