@extends('template')

@section('content')
    <div class="container">
        <h1>Oeuvres</h1>
        <a href="{{ route('oeuvres.create') }}" class="btn btn-primary">oeuvres</a>

            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Oeuvres</th>
                        <th>Auteur</th>
                        <th>Année</th>
                        <th>catégorie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($oeuvres->isEmpty())
                        <tr>
                            <td colspan="3">Aucun résultat trouvé</td>
                        </tr>
                    @else
                        @foreach ($oeuvres as $oeuvre)
                            <tr>
                                <td>{{ $oeuvre->nom }}</td>
                                <td>{{ $oeuvre->artiste->nom }}</td>
                                <td>{{ $oeuvre->année }}</td>
                                <td>{{ $oeuvre->categorie->nomCategorie }}</td>

                                <td>
                                    <a href="{{ route('oeuvres.edit', $oeuvre) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('oeuvres.destroy', $oeuvre) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick= "return confirm('are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
    </div>
@endsection
