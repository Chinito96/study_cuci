@extends('layouts.app')
@section('content')
<section>
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        @if (session()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
        @endif
        @if (session()->get('error'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('error') }}
        </div>
        @endif
        <div class="row">

        </div>
        <div class="table-responsive">
            <table id="ap_table" class="table-striped responsive nowrap dataTable" style="width: 100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                        <th>Domicilio Cuarto</th>
                        <th>Contacto Cuarto</th>
                        <th>Contacto Usuario</th>
                        <th>Estatus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($appointments as $key => $appointment)
                    <tr id="{{$appointment['id']}}">
                        <td>{{$appointment['id']}}</td>
                        <td>{{$appointment['username']}}</td>
                        <td>{{$appointment['address']}}</td>
                        <td>{{$appointment['room_contact']}}</td>
                        <td>{{$appointment['phone']}}</td>
                        <td>{{$appointment['status']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</section>
@include('modals.room-status')
@endsection
@section('footer-scripts')
<script>
$(document).ready(function(){
    let ap = $('#ap_table').DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.childRowImmediate,
                type: 'none',
                target: ''
            }
        },
        dom: 'lBfrtip',
        select: {
            style: 'single'
        },
        buttons: [
            {
                text: 'Cambiar Estatus',
                className: 'btn btn-success mx-3',
                action: function(e, dt, node, config) {
                    let id = dt.row({selected: true}).id();
                    let url = '/appointments/' + id;
                    $.get(url, function(data) {
                        $('#app-form').attr('action', url);
                        $('#status').val(data.status);
                        $('#comments').val(data.comments);
                        $('#app-room').modal('show');
                    });
                },
                init: function(api, node, config) {
                    $(node).removeClass('dt-button');
                },
                enabled: false
            }
        ]
    });
    ap.on('select deselect', function () {
        let selectedRow = ap.rows({ selected: true}).count();
        ap.button(0).enable(selectedRow === 1);
    });
})
</script>
@endsection