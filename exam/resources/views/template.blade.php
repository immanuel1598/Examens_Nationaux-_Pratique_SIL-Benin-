
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vos coordonnées</title>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{ route('candidats.index') }}">Candidats</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('candidats.index') }}">Candidats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('candidats.create') }}">Create Candidat</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <div class="container mt-3">
            @yield('content')
        </div>
    
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    </body>
    </html>
