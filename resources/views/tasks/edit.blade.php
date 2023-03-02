@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tarea</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Título</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $task->name }}">
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary float-right">Cancelar</a>
    </form>
</div>
@endsection