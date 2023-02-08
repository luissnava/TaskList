@extends('Home')
@section('name')


    <div class="conatiner-fluid p-5">
        <div class="row justify-content-center">

            <div class="col-sm-6 col-md-4 col-12 my-5 mx-5 border">
                <div class="text-center my-3">
                    <h3>Crear tarea nueva</h3>
                </div>

                <input type="hidden" value="0" id="id_task">
                <input type="hidden" value="{{$ruta}}" id="ruta">

                <label for="nameTask" class="my-3 fs-5">Nombre Tarea</label>
                <input type="text" name="name" id="name" class="form-control">

                <label for="nameTask" class="my-3 fs-5">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" maxlength="150"></textarea>

                <button id="saveTask" class="btn btn-primary mt-5 w-100 mb-4">Guardar</button>
                
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-12 text-center d-none" id="noti">
                <p class="shadow py-3 mb-5 bg-body rounded">Tarea guardada !</p>
            </div>
            <div class="col-sm-6 col-md-4 col-12 text-center d-none" id="mensaje">
                <p class="shadow py-3 mb-5 bg-secondary rounded text-white">Por favor, asegurese de llenar todos los campos</p>
            </div>
        </div>
    </div>
    <script src="{{asset('js/formulario.js')}}"></script>
@endsection
