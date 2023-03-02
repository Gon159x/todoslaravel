@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de Tarea</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $task->name }}</h5>
            <p class="card-text">{{ $task->description }}</p>
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-secondary mr-2">Editar</a>
            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
            <a href="{{ route('tasks.index') }}" class="btn btn-primary float-right">Volver a la Lista</a>
        </div>
    </div>
</div>
@endsection