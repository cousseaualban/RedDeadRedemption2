@extends("adminlte::page")


@section("content")

<!-- Tableau d'affichage des personnages Red Dead Redemption 2  -->

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Les régions de Red Dead Redemption 2</h3>

    <div class="d-flex justify-content-end mb-4">
        <a href="{{route('regions-admin.create')}}" class="btn btn-primary">Ajouter une nouvelle région</a>
    </div>
    <table class="table table-striped">

        <thead>
            <tr>
                <td>ID</td>
                <td>Photo de la région</td>
                <td>Nom de la région</td>
                <td>Capitale de la région</td>
                <td>Description</td>
            </tr>
        </thead>

        <tbody>
            @foreach($regions as $region)
            <tr>
                <td>{{$region->id}}</td>
                <td style="width: 20%"><img src="{{asset('/storage/images/regions/'.$region->image)}}" style="width: 60%" /></td>
                <td>{{$region->nom}}</td>
                <td>{{$region->ville->capitale}}</td>
                <td>{{ substr($region->description, 0, 50) }}[...]</td>
                <td class="d-flex justify-content-between">
                    <form action="{{route('regions-admin.destroy', $region->id) }}" method="post">
                        <a href="{{route('regions-admin.show', $region->id) }}" class="btn btn-info">Voir plus</a>
                        <a href="{{ route('regions-admin.edit', $region->id) }}" class="btn btn-warning">Modifier</a>

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('Etes-vous sûr de vouloir supprimer cette région ?') }}')">
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection