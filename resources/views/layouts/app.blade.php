<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Notícias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/list/report') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 40px;">
            </a>
    
            <!-- Botão do menu para dispositivos móveis -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <!-- Links da navbar e formulário de pesquisa -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Links de navegação (alinhados à direita) -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('category.index') }}">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('report.index') }}">Notícias</a>
                    </li>
                </ul>
    
                <!-- Formulário de Pesquisa -->
                <form class="d-flex ms-3" method="POST" action="{{ route('report.search') }}"> 
                    @csrf
                    <input class="form-control me-2" type="search" name="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>