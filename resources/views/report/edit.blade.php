@extends('layouts.app')

@section('title', 'Edição de Notícia')

@section('content')
<div class="container mt-4">
    <a href="{{ route('report.index') }}" class="btn-action back">Voltar</a>

    <h1>Edição de Categoria</h1>

    <form action="{{ route('report.update', $report->id) }}" method="POST" class="form-container">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $report->title }}" required>
            @error('title')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" id="description" class="form-control" required>{{ $report->description }}</textarea>
            @error('description')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="author">Autor</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $report->author }}" required>
            @error('author')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select id="categories" name="category_id" required>
                <option value="">Selecione uma categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($report->category_id == $category->id)>{{ $category->name }}</option>
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
                <input type="checkbox" id="toggleInput" name="status" @if($report->status == 'active') checked @endif value="active">
                <span class="slider round"></span>
            </label>
        </div>

        <div class="form-group">
            <label for="source">Fonte</label>
            <input type="text" name="source" id="source" class="form-control" value="{{ $report->source }}" required>
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