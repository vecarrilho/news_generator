@extends('layouts.app')

@section('title', 'Lista de Categorias')

@section('content')
<div class="container" >
    <h1 class="mb-4">Lista de Categorias</h1>

    @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="error-message">{{ session('error') }}</div>
    @endif
    
    <a href="{{ route('category.create') }}" class="btn-action create"><i class="fas fa-plus"></i> Nova Categoria</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nome</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('category.edit', [$category->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a> 
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" onclick="return confirm('Tem certeza que deseja deletar esta categoria?');"><i class="fa-solid fa-trash" style="color: red"></i></button>
                        </form>
                        {{-- <a href="{{ route('category.destroy', $category->id) }}"><i class="fa-solid fa-trash" style="color: red"></i></a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
