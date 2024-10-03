@extends('layouts.app')

@section('title', 'Lista de Categorias')

@section('content')
<h1>Lista de Categorias</h1>

<a href="{{ route('category.create') }}" class="btn-category create"><i class="fas fa-plus"></i> Nova Categoria</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td><a href="{{ route('category.edit', $category->id) }}"><i class="fa-solid fa-pen-to-square"></i></a> 
                    <form action="{{ route('category.delete', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Tem certeza que deseja deletar esta categoria?');"><i class="fa-solid fa-trash" style="color: red"></i></button>
                    {{-- <a href="{{ route('category.destroy', $category->id) }}"><i class="fa-solid fa-trash" style="color: red"></i></a> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
