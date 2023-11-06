@extends("adminlte::page")

@section("content")

<div class="card uper">
    <div class="card-header text-center">
        <h2>Ajouter une nouvelle bande</h2>
    </div>

    <div class="card-body" style="width: 40%">

        <form action="{{ route('gangs-admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom"> Nom de la bande : </label>
                <input type="text" class="form-control" name="nom" />
                @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Photo de la bande</label>
                <input type="file" class="form-control" name="image" />
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="historique"> Histoire de la bande : </label>
                <textarea type="text" class="form-control" name="historique" style="height: 20vh"></textarea>
                @error('historique')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="localisation"> Localisation de la bande : </label>
                <input type="text" class="form-control" name="localisation" />
                @error('localisation')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
@endsection