@extends('layouts.app')

@section('content')
<div class="container vh-100">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center mb-4">Lista de Tareas</h1>
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-primary">
                                            Ver
                                        </a>
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-secondary">
                                            Editar
                                        </a>
                                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('tasks.create') }}" class="btn btn-success mt-4">Agregar Nueva Tarea</a>
        </div>
    </div>
</div>
@endsection