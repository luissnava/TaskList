@extends('Home')

@section('name')
    <div class="row px-4 py-4">
        @if ($data->isEmpty())
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                    <h3>No hay tareas creadas</h3>
                </div>
            </div>
        @else
            @foreach ($data as $item)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4 mt-4">
                    <div class="card" style="background: #ced4da;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->tarea }}</h5>
                            <div class="row">

                                <div class="col-12 col-md-3 col-sm-6 col-lg-4 mt-4">
                                    <a href="{{ route('view.task', $item->id) }}" class="btn btn-primary w-100">Ver</a>
                                </div>
                                <div class="col-12 col-md-5 col-sm-6 col-lg-4 mt-4">
                                    <a href="{{ route('update.task', [$item->id]) }}"
                                        class="btn btn-primary w-100">Actualizar</a>
                                </div>
                                <div class="col-12 col-md-4 col-sm-6 col-lg-4 mt-4">
                                    <button class="btn btn-danger w-100" onclick="eliminar({{ $item->id }})"
                                        data-id="{{ $item->id }}">Eliminar</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection
