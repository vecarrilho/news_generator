@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $report->titulo }}</h1>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $report->title }}</h5>
                    <p class="card-text">{{ $report->description }}</p>
                    <p class="text-muted">Publicado em: {{ $report->created_at->format('d/m/Y H:i') }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Informações Adicionais ou Relacionadas -->
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Autor: {{ $report->author }}</h5>
                    <p class="card-text">Categoria: {{ $report->category->name }}</p>
                    <p class="card-text">Fonte: {{ $report->source }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Botão para voltar à listagem -->
    <a href="{{ route('report.list') }}" class="btn btn-secondary mt-3">
        <i class="fas fa-arrow-left"></i> Voltar à Listagem
    </a>
</div>
@endsection