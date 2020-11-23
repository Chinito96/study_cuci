<div class="modal fade" id="room-event">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirma la habitación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ url('appointments') }}" class="form" id="room-form">
                <div class="modal-body">
                    <div class="form-group row my-3">            
                        <h3 class="col-md-3 col-form-label text-md-right">Dirección</h3>
                        <div class="col-md-8">
                            <h4 id="room_address" class="btn btn-link"></h4>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input id="room_id" type="hidden" name="room_id" value="">
                    <div class="form-group row my-3">
                        @csrf             
                        <label for="phone" class="col-md-3 col-form-label text-md-right"><span
                                class="float-left">{{ __('Contacto') }}</span></label>
                        <div class="col-md-8">
                            <input type="tel" class="phone form-control" id="phone" name="phone" value="{{Auth::user()->phone}}" placeholder="00-0000-0000" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" required>
                        </div>
                    </div>
                    <div class="form-group row my-3">         
                        <label for="comment" class="col-md-3 col-form-label text-md-right"><span
                                class="float-left">{{ __('Comentarios') }}</span></label>
                        <div class="col-md-8">
                            <textarea rows="3" class="comment form-control" name="comment"></textarea>
                        </div>
                    </div>
                    <div class="row my-3">
                        <small class="col-12 col-form-label text-muted">Al hacer click en solicitar recibiremos tu solicitud para una cita, nosotros nos contactaremos con el casero y agendaremos una visita para ti, 
                            cuando tengamos respuesta te lo notificaremos por correo o al número de contacto indicado. Te pedimos seas paciente.
                        </small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Solicitar</button>
                </div>
            </form>
        </div>
    </div>
</div>