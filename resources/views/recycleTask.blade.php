@extends('Home')

@section('name')
    <div class="row px-4 py-4">
        @foreach ($data as $item)
        <div class="col-12 col-sm-6 col-md-6 col-lg-3 mt-4">
            <div class="card" style="background: #ced4da;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->tarea }}</h5>
                    <p class="mb-2">{{$item->fecha_registro}}</p>
                    <div class="row">

                        <div class="col-12 col-md-3 col-sm-6 col-lg-4 mt-2">
                            <button class="btn btn-primary w-100" onclick="restaurar({{$item->id}})">Restaurar</button>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>
            
        @endforeach
    </div>
    <script src="{{asset('js/delete.js')}}"></script>
@endsection
