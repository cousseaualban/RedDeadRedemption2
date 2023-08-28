@extends("adminlte::page")


@section("content")

<!-- Tableau d'affichage des articles Red Dead Redemption 2  -->

<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Les articles Red Dead Redemption 2</h3>

    <div class="d-flex justify-content-end mb-4">
        <a href="{{route('articles-admin.create')}}" class="btn btn-primary">Créer un nouvel article</a>
    </div>
    <table class="table table-striped">

        <thead>
            <tr>
                <td>ID</td>
                <td>Titre de l'article</td>
                <td>Photo de l'article</td>
                <td>Auteur</td>
                <td>Contenu</td>
                <td>Date de l'article</td>
            </tr>
        </thead>

        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{ substr($article->titre, 0, 30) }}[...]</td>
                <td style="width: 20%"><img src="{{asset('/storage/images/articles/'.$article->image)}}" style="width: 60%"/></td>
                <td>{{$article->auteur}}</td>
                <td>{{ substr($article->contenu, 0, 50) }}[...]</td>
                <td>{{$article->dateArticle}}</td>
                <td class="d-flex justify-content-between">
                    <form action="{{route('articles-admin.destroy', $article->id) }}" method="post">
                        <a href="{{route('articles-admin.show', $article->id) }}" class="btn btn-info">Voir plus</a>
                        <a href="{{ route('articles-admin.edit', $article->id) }}" class="btn btn-warning">Modifier</a>

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