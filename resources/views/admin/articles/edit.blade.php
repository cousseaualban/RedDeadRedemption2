@extends("adminlte::page")

@section("content")

<!-- Formulaire d'édition d'un article  -->

<div class="card uper">
    <div class="card-header text-center">
        <h2>Modifier d'article</h2>
    </div>

    <div class="card-body" style="width: 40%">

        <form action="{{ route('articles-admin.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="titre"> Titre de l'article : *</label>
                <input type="text" name="titre" value="{{ $article->titre }}" class="form-control" placeHolder="titre">
                @error('titre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Photo du article : *</label>
                <input type="file" class="form-control-file" name="image" />
                <img src="{{asset('/storage/images/articles/'.$article->image)}}" alt="Photo du article" style="width: 60%; padding-top: 3vh; padding-bottom: 3vh" />
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="auteur">Auteur de l'article : *</label>
                <input type="text" name="auteur" value="{{ $article->auteur }}" class="form-control" placeHolder="auteur">
                @error('auteur')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="contenu">Contenu de l'article : *</label>
                <textarea class="form-control" name="contenu" style="height: 20vh;">{{ $article->contenu }}</textarea>
                @error('contenu')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <strong>Date de l'article : *</strong>
                <input type="date" name="dateArticle" value="{{ $article->dateArticle  }}" class="form-control" placeHolder="dateArticle">
                @error('dateArticle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection