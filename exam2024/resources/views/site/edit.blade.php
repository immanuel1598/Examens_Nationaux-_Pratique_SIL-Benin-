@extends('test')

@section('content')
    <div class="container">
        <h1>Mettre à jour des Courses</h1>
        <form action="{{ route('courses.update', $course) }}" method="POST" >
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="point_depart" class="form-label">point_depart</label>
                <input type="text" class="form-control @error('point_depart') is-invalid @enderror" id="point_depart" name="point_depart" value="{{ $course->point_depart }}">
                @error('point_depart')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            <div class="mb-3">
                <label for="point_arrivee" class="form-label">point_arrivee</label>
                <input class="form-control @error('point_arrivee') is-invalid @enderror" id="point_arrivee" name="point_arrivee" value="{{ $course->point_arrivee }} " >
                @error('point_arrivee')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date_heure" class="form-label">date_heure</label>
                <input type="datetime-local" class="form-control @error('date_heure') is-invalid @enderror" id="date_heure" name="date_heure" value="{{ $course->date_heure }}" >
                @error('date_heure')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chauffeur" class="form-label">chauffeur</label>
                <select class="form-select @error('chauffeur') is-invalid @enderror" id="chauffeur" name="chauffeur">
                    <option value="" selected disabled  >Sélectionnez la chauffeur</option>
                    @foreach ($chauffeurs as $chauffeur)
                    <option value="{{$chauffeur->chauffeur_id}}" @if($chauffeur->disponible === 0)
                        style="color: blue"
                    @endif> {{$chauffeur->nom}} {{$chauffeur->prenoms}} </option>
                    @endforeach
                </select>
                @error('chauffeur')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">statut</label>
                <select class="form-select @error('statut') is-invalid @enderror" id="statut" name="statut">
                    <option value="" selected disabled >Sélectionnez le statut</option>
                     <option value="0">En cours </option>
                     <option value="1">Terminé </option>
                </select>
                @error('statut')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
