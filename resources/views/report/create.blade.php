@extends('layouts.app')

@section('title', 'Criação de Noticia')

@section('content')
<div class="container mt-4">
    <a href="{{ route('report.index') }}" class="btn-action back">Voltar</a>

    <h1>Formulário de Notícia</h1>

    <form action="{{ route('report.store') }}" method="POST" class="form-container">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
            @error('title')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control" required></textarea>
            @error('description')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}" required>
            @error('author')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select id="categories" name="category_id" required>
                <option value="">Selecione uma categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <br>
            <br>
            <label class="switch">
                <input type="checkbox" id="toggleInput" name="status" value="active">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="form-group">
            <label for="source">Fonte</label>
            <input type="text" name="source" id="source" class="form-control" value="{{ old('source') }}" required>
            @error('source')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button type="submit" class="btn-submit">Enviar</button>
        </div>
    </form>
</div>
@endsection