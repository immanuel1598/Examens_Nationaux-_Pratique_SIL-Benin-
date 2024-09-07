@extends('template')

@section('content')
    <div class="container">
        <h1>SAISIE DES PROJETS</h1>
        <form action="{{ route('projets.update', $projet) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomProjet" class="form-label">nom du projet</label>
                <input type="text" class="form-control @error('nomProjet') is-invalid @enderror" id="nomProjet" name="nomProjet" value="{{ $projet->nomProjet}}">
                @error('nomProjet')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="dateLancement" class="form-label">Date de lancement</label>
                <input type="date" class="form-control @error('dateLancement') is-invalid @enderror" id="dateLancement" name="dateLancement" value="{{$projet->dateLancement }}">
                @error('dateLancement')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="durée" class="form-label">Durée</label>
                <input type="time" class="form-control @error('durée') is-invalid @enderror" id="durée" name="durée" value="{{ old('durée') }}">
                @error('durée')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="localité" class="form-label">localité</label>
                <select class="form-select @error('localité') is-invalid @enderror" id="localité" name="localité">
                    <option value="" selected disabled >Sélectionnez la localité</option>
                    @foreach ($localites as $localite)
                    <option value="{{$localite->codLocalite}}" >{{$localite->nomLocalite}}</option>
                    @endforeach
                </select>
                @error('sexe')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
@endsection
