@extends('layouts.app')

@section('title', 'Edição de Categoria')

@section('content')
<div class="container mt-4">
    <a href="{{ route('category.index') }}" class="btn-action back">Voltar</a>

    <h1>Edição de Categoria</h1>

    <form action="{{ route('category.update', $category->id) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $category->name }}" required>
            @error('title')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn-submit">Enviar</button>
        </div>
    </form>
</div>
@endsection