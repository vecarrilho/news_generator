@extends('layouts.app')

@section('content')
    <div class="container mt-4"  >
        {{-- <h1 class="mb-4">Catálogo de Notícias</h1> --}}

        {{-- @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif --}}
        <div class="row g-4">
            @forelse ($reports as $report)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 border-primary" style="border-width: 2px;">
                        <div class="card-body">
                            <h2>{{ $report->title }}</h2>
                            <p class="card-text">{{ Str::limit($report->description, 150) }}</p>
                            <p>Autor: {{ $report->author }} | Publicado em: {{ $report->created_at->format('d/m/Y') }}</p>
                        </div>
                        <a href="{{ route('report.show', $report->id) }}" class="btn btn-primary">Leia mais</a>
                    </div>
                </div>
            @empty
                <p>Nenhuma notícia encontrada.</p>
            @endforelse
        </div>

        <!-- Paginação -->
        {{-- {{ $reports->links() }} --}}
    </div>
@endsection