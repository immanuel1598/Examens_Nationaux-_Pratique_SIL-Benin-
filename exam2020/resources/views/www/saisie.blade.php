@extends('template')

@section('content')
    <div class="container">
        <h1>All projets</h1>
        <a href="{{ route('projets.create') }}" class="btn btn-primary">Projets</a>

            <table class="table mt-3">
                <thead>
                    <tr>

                        <th>NomProjet</th>
                        <th>date de lancement</th>
                        <th>durée</th>
                        <th>localité</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($projets->isEmpty())
                        <tr>
                            <td colspan="3">Aucun résultat trouvé</td>
                        </tr>
                    @else
                        @foreach ($projets as $projet)
                            <tr>
                                <td>{{ $projet->nomProjet }}</td>
                                <td>{{ $projet->dateLancement }}</td>
                                <td>{{ $projet->durée }}</td>
                                <td>{{ $projet->Localite->nomLocalite }}</td>
                                <td><a href="{{ route('projets.edit', $projet) }}" class="btn btn-primary">editer</a></td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
    </div>
@endsection
