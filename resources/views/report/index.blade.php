@extends('layouts.app')

@section('title', 'Lista de Noticias')

@section('content')
<div class="container" >
    <h1 class="mb-4">Lista de Notícias</h1>

    @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @elseif(session('error'))
        <div class="error-message">{{ session('error') }}</div>
    @endif
    
    <a href="{{ route('report.create') }}" class="btn-action create"><i class="fas fa-plus"></i> Nova Notícia</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->title }}</td>
                    <td style="width: 700px">{{ $report->description }}</td>
                    <td>{{ $report->category->name }}</td>
                    <td>{{ ucwords($report->status) }}</td>
                    <td><a href="{{ route('report.edit', [$report->id]) }}"><i class="fa-solid fa-pen-to-square"></i></a> 
                        <form action="{{ route('report.destroy', $report->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" onclick="return confirm('Tem certeza que deseja deletar esta categoria?');"><i class="fa-solid fa-trash" style="color: red"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
