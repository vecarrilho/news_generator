@extends('layouts.app')

@section('title', 'Criação de Categoria')

@section('content')
<div class="container mt-4">
    <a href="{{ route('category.index') }}" class="btn-action back">Voltar</a>

    <h1>Formulário de Categoria</h1>

    <form action="{{ route('category.store') }}" method="POST" class="form-container">
        @csrf
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
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