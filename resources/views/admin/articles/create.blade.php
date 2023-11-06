@extends("adminlte::page")

@section("content")

<div class="card uper">
    <div class="card-header text-center">
        <h2>Ajouter un nouvel article</h2>
    </div>

    <div class="card-body" style="width: 40%">

        <form action="{{ route('articles-admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titre"> Titre de l'article : *</label>
                <input type="text" class="form-control" name="titre" />
                @error('titre')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Photo de l'article *</label>
                <input type="file" class="form-control" name="image" />
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="auteur"> Auteur de l'article : *</label>
                <input type="text" class="form-control" name="auteur" />
                @error('auteur')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="contenu"> Contenu de l'article : *</label>
                <textarea type="text" class="form-control" name="contenu" style="height: 20vh"></textarea>
                @error('contenu')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="dateArticle">Date de l'article : *</label>
                <input type="date" class="form-control" name="dateArticle" />
                @error('dateArticle')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
@endsection