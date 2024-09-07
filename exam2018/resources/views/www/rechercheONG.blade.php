@extends('test')

@section('content')
    <div class="container">
        <h1>All adherents</h1>
        <a href="{{ route('inscriptions.create') }}" class="btn btn-primary">inscription</a>
        <form action="{{ route('adherents.index') }}" method="GET">
            <div class="mb-3 flex ">
                <div class="space">
                    <label for="domaine">domaine</label>
                    <select class="form-select" id="domaine" name="domaine" >
                        <option value="" selected disabled>Sélectionnez un domaine</option>
                        @foreach ($domaines as $domaine)
                            <option value="{{ $domaine }}">{{ $domaine }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="space">
                    <label for="année">année</label>
                    <select class="form-select" id="année" name="année">
                        <option value="" selected disabled>Sélectionnez un année</option>
                        @foreach ($années as $année)
                            <option value="{{ $année }}">{{ $année }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Prénom</th>
                        <th>sexe</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($adherents->isEmpty())
                        <tr>
                            <td colspan="3">Aucun résultat trouvé</td>
                        </tr>
                    @else
                        @foreach ($adherents as $adherent)
                            <tr>
                                <td>{{ $adherent->nom }}</td>
                                <td>{{ $adherent->prénom }}</td>
                                <td>{{ $adherent->sexe }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <button
                type="submit"
                class="btn btn-primary"
            >
                rechercher
            </button>
        </form>
    </div>
@endsection
