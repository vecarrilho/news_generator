@extends('layouts.app')

@section('title', 'Criação de Categoria')

@section('content')
    <a href="{{ route('category.index') }}" class="btn-category back">Voltar</a>

    <h1>Formulário de Categoria</h1>
    
    <!-- Exibir mensagem de sucesso -->
    @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <form action="{{ route('category.store') }}" method="POST" class="form-container">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" id="titulo" class="form-control" value="{{ old('titulo') }}" required>
            @error('titulo')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn-submit">Enviar</button>
        </div>
    </form>
@endsection