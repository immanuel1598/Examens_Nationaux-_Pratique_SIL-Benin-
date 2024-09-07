@extends('template')

@section('content')
    <div class="container">
        <h1>update oeuvre</h1>
        <form action="{{ route('oeuvres.update', $oeuvre) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">nom</label>
                <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{$oeuvre->nom}}">
                @error('nom')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{$oeuvre->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="année" class="form-label">année</label>
                <input type="number" class="form-control @error('année') is-invalid @enderror" id="année" name="année" value="{{$oeuvre->année}}">
                @error('année')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="categorie" class="form-label">categorie</label>
                <select class="form-select @error('categorie') is-invalid @enderror" id="categorie" name="categorie">
                    <option value="" selected disabled >Sélectionnez la categorie</option>
                    @foreach ($categories as $categorie)
                    <option value="{{$categorie->idCategorie}}" >{{$categorie->nomCategorie}}</option>
                    @endforeach
                </select>
                @error('categorie')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="artiste" class="form-label">artiste</label>
                <select class="form-select @error('artiste') is-invalid @enderror" id="artiste" name="artiste">
                    <option value="" selected disabled >Sélectionnez la artiste</option>
                    @foreach ($artistes as $artiste)
                    <option value="{{$artiste->idArtiste}}" >{{$artiste->nom}}</option>
                    @endforeach
                </select>
                @error('artiste')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
