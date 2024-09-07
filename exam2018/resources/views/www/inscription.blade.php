@extends('test')
@section('content')

<div class="container">
    <h1>adhésion annuelle</h1>
    <form action="{{ route('inscriptions.store') }}" method="POST" class="flex">
        @csrf
        <div class="m-3">
            <div class="mb-3">
                <label for="dateinscription" class="form-label">Date inscription</label>
                <input type="date" class="form-control @error('dateinscription') is-invalid @enderror" id="dateinscription" name="dateinscription" value="{{ old('dateinscription') }}">
                @error('dateinscription')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <select class="form-select @error('nom') is-invalid @enderror" id="nom" name="nom">
                <option value="" selected disabled >Sélectionnez un adherent</option>
                @foreach ($adherents as $adherent)
                <option value="{{$adherent->nom}}" >{{$adherent->nom}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="datnais" class="form-label">Date de naissance</label>
            <input type="date" class="form-control @error('datnais') is-invalid @enderror" id="datnais" name="datnais" value="{{ old('datnais') }}">
            @error('datnais')
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
            <label for="nom" class="form-label">Filière</label>

            @error('sexe')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>
           
        <button type="submit" class="btn btn-primary">effacer</button>
        <button type="submit" class="btn btn-primary">enregister</button>
         </div>
      </div>
      <div class="m-3">
        <div class="mb-3">
            <label for="année" class="form-label">année en cours</label>
            <input type="year" class="form-control @error('année') is-invalid @enderror" id="année" name="année" value="{{ old('année') }}">
            @error('année')
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
        <label for="ville" class="form-label">Ville</label>
        <input type="text" class="form-control @error('ville') is-invalid @enderror" id="ville" name="ville" value="{{ old('ville') }}">
        @error('ville')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
       </div>
       <div class="mb-3">
        <label for="domaine" class="form-label">domaine</label>
        <select class="form-select @error('domaine') is-invalid @enderror" id="domaine" name="domaine">
            <option value="" selected disabled >Sélectionnez un adherent</option>
            <option value="santé" >santé</option>
            <option value="assainissement" >assainissement</option>

        </select>
        </div>
    </div>
    </form>


</div>

@endsection
