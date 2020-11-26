<div class="modal fade" id="app-room">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cambiar Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="form" id="app-form">
                <div class="modal-body">
                    <div class="form-group row my-3">
                        @csrf   
                        @method('PUT')          
                        <label for="status" class="col-md-3 col-form-label text-md-right"><span
                                class="float-left">{{ __('Status') }}</span></label>
                        <div class="col-md-8">
                            <select class="form-control" name="status" id="status">
                                <option value="Abierto">Abierto</option>
                                <option value="Aceptado">Aceptado</option>
                                <option value="Cerrado">Cerrado</option>
                                <option value="Cancelado">Cancelado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row my-3">         
                        <label for="comment" class="col-md-3 col-form-label text-md-right"><span
                                class="float-left">{{ __('Comentarios') }}</span></label>
                        <div class="col-md-8">
                            <textarea rows="3" class="comment form-control" name="comment" id="comments"></textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <small class="col-12 col-form-label text-muted">Enviaremos una notificación por correo al usuario, 
                            recuerda notificarlo a través de su número telefonico.
                        </small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Notificar</button>
                </div>
            </form>
        </div>
    </div>
</div>