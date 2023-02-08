@extends('Home')

@section('name')
    <div class="row px-4 py-4">
        @foreach ($data as $item)
            <div class="card mt-4" style="background: #ced4da; width:">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->tarea }}</h5>
                    <a href="#" class="btn btn-danger mt-4">Eliminar</a>
                </div>
            </div>
        @endforeach
    </div>
@show
