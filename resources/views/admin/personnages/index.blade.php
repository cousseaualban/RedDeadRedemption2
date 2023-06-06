@extends("adminlte::page")


@section("content")

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste de nos villes</h3>

    <div class="d-flex justify-content-end mb-4">
        <a href="{{route('personnages-admin.create')}}" class="btn btn-primary">Créer un nouveau personnage</a>
    </div>
    <table class="table table-striped">

        <thead>
            <tr>
                <td>ID</td>
                <td>Identité du personnage</td>
                <td>Photo du personnage</td>
                <td>Age du personnage</td>
                <td>Biographie du personnage</td>
                <td>Son gang</td>
            </tr>
        </thead>

        <tbody>
            @foreach($personnages as $personnage)
            <tr>
                <td>{{$personnage->id}}</td>
                <td>{{$personnage->prenom}} {{$personnage->nom}} </td>
                <td style="width: 20%"><img src="{{asset('/storage/images/personnages/'.$personnage->image)}}" style="width: 70%"/></td>
                <td>{{$personnage->age}}</td>
                <td>{{ substr($personnage->biographie, 0, 60) }}[...]</td>
                <td>{{$personnage->gang->nom}}</td>
                <td class="d-flex justify-content-between">
                    <form action="{{route('personnages-admin.destroy', $personnage->id) }}" method="post">
                        <a href="{{route('personnages-admin.show', $personnage->id) }}" class="btn btn-info">Voir plus</a>
                        <a href="{{ route('personnages-admin.edit', $personnage->id) }}" class="btn btn-warning">Modifier</a>

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit" onclick="return confirm('{{ __('Etes-vous sûr de vouloir supprimer ce personnage ?') }}')">
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