<div class="modal fade" id="room-event">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirma la habitación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" class="form" id="room-form">
                <div class="modal-body">
                    <div class="form-group row my-3">
                        @csrf             
                        <label for="email" class="col-md-3 col-form-label text-md-right"><span
                                class="float-left">{{ __('Email') }}</span></label>
                        <div class="col-md-8">
                            <input type="email" class="email form-control" name="email" value="" required placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row my-3">         
                        <label for="idNgssol" class="col-md-3 col-form-label text-md-right"><span
                                class="float-left">{{ __('Name') }}</span></label>
                        <div class="col-md-8">
                            <input type="text" class="nameNg form-control" name="name" required value="" placeholder="Employee's Name">
                        </div>
                    </div>
                    <div class="form-group row my-3">         
                        <label for="idNgssol" class="col-md-3 col-form-label text-md-right"><span
                                class="float-left">{{ __('Employee ID') }}</span></label>
                        <div class="col-md-8">
                            <input type="number" class="idNgssol form-control" name="idNgssol" value="" placeholder="Employee ID">
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <label for="bday" class="col-md-3 col-form-label-text-md-right"><span
                                class="float-left">{{ __('Birthday') }}</span></label>
                        <div class="col-md-8">
                            <input type="date" class="form-control bday" name="bday">
                        </div>
                    </div>
                    <div class="form-group row my-2">
                        <label for="anniversary" class="col-md-3 col-form-label-text-md-right"><span
                                class="float-left">{{ __('Anniversary') }}</span></label>
                        <div class="col-md-8">
                            <input type="date" class="form-control anniversary" name="anniversary">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Solicitar</button>
                </div>
            </form>
        </div>
    </div>
</div>