@extends('template')

@section('content')
    <div class="container">
        <h1>Recherche les candidats d'une filière</h1>
        
        <form action="{{ route('candidats.index') }}" method="GET" class="mt-3">
            <div class="input-group">
                <select class="form-select"  id="search" name="search">
                    <option value="" selected disabled>Recherche</option>
                    @foreach ($filieres as $filiere)
                        <option value="{{$filiere->codefil}}">{{$filiere->codefil}}</option>
                    @endforeach
                </select>
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Sexe</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidats as $candidat)
                    <tr>
                        <td>{{ $candidat->nom }}</td>
                        <td>{{ $candidat->prénom }}</td>
                        <td>{{ $candidat->sexe }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
