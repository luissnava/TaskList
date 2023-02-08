@extends('Home')
@section('name')
    <div class="conatiner-fluid p-5">
        <div class="row justify-content-center">

            <div class="col-sm-6 col-md-4 col-12 my-5 mx-5 border">
                <div class="text-center my-3">
                    <h3>Actualizar tarea</h3>
                </div>

                <input type="hidden" value="{{$data["data"]->id}}" id="id_task">
                <input type="hidden" value="{{$data["ruta"]}}" id="ruta">

               
                <label for="nameTask" class="my-3 fs-5">Nombre Tarea</label>
                <input type="text" name="name" id="name" class="form-control" value="{{$data["data"]->tarea}}">

                <label for="nameTask" class="my-3 fs-5">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="5" class="form-control" 
                maxlength="150" placeholder="Descripción - Maximo 150 caracteres">{{$data["data"]->descripcion}}</textarea>

                <button id="saveTask" class="btn btn-primary mt-5 w-100 mb-4">Actualizar</button>

            </div>

           
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-12 text-center d-none" id="noti">
                <p class="shadow py-3 mb-5 bg-body rounded">Tarea actualizada !</p>
            </div>
        </div>
    </div>

    <script src="{{asset('js/formulario.js')}}"></script>
@endsection
