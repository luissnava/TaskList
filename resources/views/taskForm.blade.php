@extends('Home')
@section('formulario')
    <div class="row justify-content-center">

        <div class="col-sm-6 col-md-4 col-12 my-5 mx-5 border">
            <div class="text-center my-3">
                <h3>Crear tarea nueva</h3>
            </div>
            <form>
                @csrf
                <label for="nameTask" class="my-3 fs-5">Tarea</label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="nameTask" class="my-3 fs-5">Descripción</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>

                <button id="saveTask" class="btn btn-primary mt-5">Guardar Tarea</button>
            </form>
        </div>
    </div>
@show
