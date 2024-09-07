@extends('test')
@section('content')

<div class="container">
    <h1>Nouveau Cluster</h1>
    <form action="{{ route('cluster.store') }}" method="POST" class="droit" >
        @csrf
        <div class="m-3">
            <label for="filière" class="form-label">Filière</label>
            <select class="form-select @error('filière') is-invalid @enderror" id="filière" name="filière">
                <option value="" selected disabled >Sélectionnez une Filière</option>
                @foreach ($filieres as $filiere)
                <option value="{{$filiere->idFilière}}" >{{$filiere->nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex">

    <div class="m-3">

        <div class="mb-3">
            <label for="departement" class="form-label">Département</label>
            <select class="form-select @error('departement') is-invalid @enderror" id="departement" name="departement">
                <option value="" selected disabled >Sélectionnez un Département</option>
                @foreach ($departements as $departement)
                <option value="{{$departement->idDepartement}}" >{{$departement->nom}}</option>
                @endforeach
            </select>
        </div>




        <div class="mb-3">
            <label for="arrondissement" class="form-label">Arrondissement</label>
            <select class="form-select @error('arrondissement') is-invalid @enderror" id="arrondissement" name="arrondissement">
                <option value="" selected disabled >Sélectionnez un Arrondissement</option>
                @foreach ($arrondissements as $arrondissement)
                <option value="{{$arrondissement->idArrondissement}}">{{$arrondissement->nom}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="cluster" class="form-label">Nom du cluster</label>
            <input type="text" class="form-control @error('cluster') is-invalid @enderror" id="cluster" name="cluster" placeholder="Nom du cluster" value="{{ old('cluster') }}">
            @error('sexe')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div>

        <button type="submit" class="btn btn-primary" style="background-color:  #F39C12" >Annuler</button>
        <button type="submit" class="btn btn-primary" style="background-color:  #00C0EF">enregister</button>
         </div>
      </div>

        <div class="m-3">
            <div class="mb-3">
                <label for="commune" class="form-label">Commune</label>
                <select class="form-select @error('commune') is-invalid @enderror" id="commune" name="commune">
                    <option value="" selected disabled >Sélectionnez un Commune</option>
                    @foreach ($communes as $Commune)
                    <option value="{{$Commune->idCommune}}" >{{$Commune->nom}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="village" class="form-label">village</label>
                <select class="form-select @error('village') is-invalid @enderror" id="village" name="village">
                    <option value="" selected disabled >Sélectionnez un village</option>
                    @foreach ($villages as $village)
                    <option value="{{$village->idVillage}}" >{{$village->nom}}</option>
                    @endforeach
                </select>
            </div>
    </div>
</div>

    </form>


</div>

@endsection
