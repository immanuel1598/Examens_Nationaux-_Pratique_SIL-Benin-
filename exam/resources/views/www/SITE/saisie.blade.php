@extends('template')

@section('content')
    <div class="container">
        <h1>Create Candidats</h1>
        <form action="{{ route('candidats.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}">
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="prénom" class="form-label">Prénom</label>
                <input type="text" class="form-control @error('prénom') is-invalid @enderror" id="prénom" name="prénom" value="{{ old('prénom') }}">
                @error('prénom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="datnais" class="form-label">Date de naissance</label>
                <input type="date" class="form-control @error('datnais') is-invalid @enderror" id="datnais" name="datnais" value="{{ old('datnais') }}">
                @error('datnais')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control @error('ville') is-invalid @enderror" id="ville" name="ville" value="{{ old('ville') }}">
                @error('ville')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sexe" class="form-label">Sexe</label>
                <input type="text" class="form-control @error('sexe') is-invalid @enderror" id="sexe" name="sexe" value="{{ old('sexe') }}">
                @error('sexe')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="codefil" class="form-label">Filière</label>
                <select class="form-select @error('codefil') is-invalid @enderror" id="codefil" name="codefil">
                    <option value="" selected disabled >Sélectionnez le sexe</option>
                    @foreach ($filieres as $filiere)
                    <option value="{{$filiere->codefil}}" >{{$filiere->codefil}}</option>
                    @endforeach
                </select>
                @error('sexe')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
