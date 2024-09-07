@extends('test')

@section('content')
    <div class="container">
        <h1>All courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary">Ajouter une nouvelle course</a>



            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID de la course</th>
                        <th>point de départ</th>
                        <th>point d'arriver</th>
                        <th>date et heure</th>
                        <th>chauffeur affecté</th>
                        <th>statut de la course</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($courses->isEmpty())
                        <tr>
                            <td colspan="3">Aucun résultat trouvé</td>
                        </tr>
                    @else
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->course_id }}</td>
                                <td>{{ $course->point_depart }}</td>
                                <td>{{ $course->point_arrivee }}</td>
                                <td>{{ $course->date_heure }}</td>
                                <td>{{ $course->chauffeur->nom }} {{ $course->chauffeur->prenoms }}</td>
                                <td> @if($course->statut === 0)
                                   En cours
                                @else
                                  Terminé
                                @endif</td>
                                <td>

                                    <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">Editer</a>
                                    <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
@endsection
