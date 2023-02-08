@section('navbar')
    
<div class="row">
    <nav class="" style="background: #0b3244">
        <div class="col-12 d-flex justify-content-center fs-5">
            <ul class="d-flex p-4">
                <li style="list-style: none" class="mx-4">
                    <a href="{{route('task.home')}}" style="text-decoration: none; color: white">Tareas</a>
                </li>
                <li style="list-style: none" class="mx-4">
                    <a href="{{route('create.task')}}" style="text-decoration: none; color: white">Crear Tarea</a>
                </li>
                <li style="list-style: none" class="mx-4">
                    <a href="{{route("recycle.task")}}" style="text-decoration: none; color: white">Papelera</a>
                </li>
            </ul>
        </div>
    </nav>
</div>


@show
