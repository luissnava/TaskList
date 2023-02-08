@extends('Home')

@section('name')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-4">
                <div class="card" style="background: #ced4da;">
                    <div class="card-body">
                        <h3>{{ $data->tarea }}</h3>
                        <div class="">
                            <p>{{ $data->fecha_registro }}</p>
                        </div>
                        <div class="">
                            {!! $data->descripcion !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
