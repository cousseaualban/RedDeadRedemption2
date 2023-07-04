@extends("adminlte::page")


@section("content")

<!-- Tableau d'affichage des personnages Red Dead Redemption 2  -->

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Les bandes de Red Dead Redemption 2</h3>

    <div class="d-flex justify-content-end mb-4">
        <a href="{{route('gangs-admin.create')}}" class="btn btn-primary">Ajouter une nouvelle bande</a>
    </div>
    <table class="table table-striped">

        <thead>
            <tr>
                <td>ID</td>
                <td>Photo de la bande</td>
                <td>Nom de la bande</td>
                <td>Historique</td>
                <td>Localisation</td>
            </tr>
        </thead>

        <tbody>
            @foreach($gangs as $gang)
            <tr>
                <td>{{$gang->id}}</td>
                <td style="width: 20%"><img src="{{asset('/storage/images/gangs/'.$gang->image)}}" style="width: 60%"/></td>
                <td>{{$gang->nom}}</td>
                <td>{{ substr($gang->historique, 0, 50) }}[...]</td>
                <td>{{$gang->localisation}}</td>
                <td class="d-flex justify-content-between">
                    <form action="{{route('gangs-admin.destroy', $gang->id) }}" method="post">
                        <a href="{{route('gangs-admin.show', $gang->id) }}" class="btn btn-info">Voir plus</a>
                        <a href="{{ route('gangs-admin.edit', $gang->id) }}" class="btn btn-warning">Modifier</a>

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('Etes-vous sûr de vouloir supprimer cette bande ?') }}')">
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