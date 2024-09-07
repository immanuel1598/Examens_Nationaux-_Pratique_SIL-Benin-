@extends('test')

@section('content')
    <div class="container">
        <h1>All clusters</h1>
        <a href="{{ route('cluster.create') }}" class="btn btn-primary">inscription</a>



            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Filière</th>
                        <th>Village</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($clusters->isEmpty())
                        <tr>
                            <td colspan="3">Aucun résultat trouvé</td>
                        </tr>
                    @else
                        @foreach ($clusters as $cluster)
                            <tr>
                                <td>{{ $cluster->nom }}</td>
                                <td>{{ $cluster->filiere->nom }}</td>
                                <td>{{ $cluster->village->nom }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
@endsection
